<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class OptimizeImages extends Command
{
    protected $signature = 'images:optimize {--table= : Procesa solo una tabla específica}';
    protected $description = 'Convierte imágenes de la base de datos a WebP y las redimensiona si es necesario.';

    protected $processingMaps = [
        'slidermains' => ['path' => 'img/slider', 'columns' => ['image']],
        'publicoferts' => ['path' => 'img/ofertas', 'columns' => ['image']],
        'productos' => ['path' => 'img/productos', 'columns' => ['image']],
        'proveedores' => ['path' => 'img/proveedore', 'columns' => ['image']],
        'cardservicios' => ['path' => 'img/servicios', 'columns' => ['image', 'imghover']],
        'publicidad_emergentes' => ['path' => 'img/publicidadEmergente', 'columns' => ['image']],
        'facturacion_pages' => ['path' => 'img/facturacion', 'columns' => ['image']],
        'indexsettings' => ['path' => 'img/imagenfooter', 'columns' => ['image']],
        'miempresas' => ['path' => 'img/miempresa', 'columns' => ['image']],
        'vacantes' => ['path' => 'img/vacantes', 'columns' => ['image']],
        'instalacions' => ['path' => 'img/Instalacion', 'columns' => ['image']],
        'crear_cupones' => ['path' => 'img/cupones', 'columns' => ['image']],
    ];

    public function handle()
    {
        if (!extension_loaded('gd')) {
            $this->error('La extensión GD no está cargada. Intenta ejecutar con: php -c C:\xampp\php\php.ini artisan images:optimize');
            return 1;
        }

        $specificTable = $this->option('table');
        $maps = $specificTable ? [$specificTable => $this->processingMaps[$specificTable]] : $this->processingMaps;

        foreach ($maps as $table => $config) {
            if (!Schema::hasTable($table)) {
                $this->warn("La tabla {$table} no existe. Saltando...");
                continue;
            }

            $this->info("Procesando tabla: {$table}...");
            
            foreach ($config['columns'] as $column) {
                $items = DB::table($table)->whereNotNull($column)->get();

                foreach ($items as $item) {
                    $oldName = $item->{$column};
                    if (!$oldName || str_ends_with(strtolower($oldName), '.webp')) continue;

                    $directory = public_path($config['path']);
                    $oldPath = $directory . '/' . $oldName;

                    // Búsqueda inteligente (Case-Insensitive para Linux)
                    if (!File::exists($oldPath)) {
                        $files = File::files($directory);
                        foreach ($files as $file) {
                            if (strtolower($file->getFilename()) === strtolower($oldName)) {
                                $oldPath = $file->getRealPath();
                                break;
                            }
                        }
                    }

                    if (!File::exists($oldPath)) {
                        $this->warn("No se encontró el archivo: {$oldName} en {$config['path']}. Saltando...");
                        continue;
                    }

                    // Normalización profunda (Slugify + Minúsculas) para evitar problemas en Linux
                    $baseName = pathinfo($oldName, PATHINFO_FILENAME);
                    $newName = Str::slug($baseName) . '.webp';
                    
                    if (!$newName || $newName === '.webp') {
                         $newName = strtolower($baseName) . '.webp'; // Fallback si slug falla
                    }

                    $newPath = $directory . '/' . $newName;

                    if ($this->optimizeAndConvert($oldPath, $newPath)) {
                        DB::table($table)->where('id', $item->id)->update([$column => $newName]);
                        $this->line("Optimizado [{$column}]: {$oldName} -> {$newName}");
                        
                        // Si el nombre cambió solo por mayúsculas/minúsculas, eliminamos el original viejo
                        if (strtolower($oldName) !== strtolower($newName)) {
                             // Opcional: File::delete($oldPath);
                        }
                    }
                }
            }
        }

        // --- PROCESAR IMÁGENES COMO ESTÁTICAS (Sin modificar DB) ---
        $staticFolders = [
            'img/estaticos',
            'img/cupones',
            'img/empleo',
            'img/facturacion',
            'img/imagenfooter',
            'img/Instalacion',
            'img/miempresa',
            'img/vacantes'
        ];

        foreach ($staticFolders as $folder) {
            $this->info("Procesando imágenes en: {$folder}...");
            $folderPath = public_path($folder);
            if (File::exists($folderPath)) {
                // Buscamos todas las imágenes sin importar la extensión (mayúsculas o minúsculas)
                $files = File::files($folderPath);
                foreach ($files as $file) {
                    $filename = $file->getFilename();
                    if (str_ends_with(strtolower($filename), '.webp')) continue;
                    
                    if (!preg_match('/\.(png|jpg|jpeg|gif)$/i', $filename)) continue;

                    $baseName = pathinfo($filename, PATHINFO_FILENAME);
                    $newName = Str::slug($baseName) . '.webp';
                    if (!$newName || $newName === '.webp') {
                        $newName = strtolower($baseName) . '.webp';
                    }
                    $newPath = $folderPath . '/' . $newName;

                    if (!file_exists($newPath)) {
                        if ($this->optimizeAndConvert($file->getRealPath(), $newPath)) {
                            $this->line("Optimizado [{$folder}]: {$filename} -> {$newName}");
                        }
                    }
                }
            }
        }

        $this->info('Proceso de optimización finalizado.');
        return 0;
    }

    private function optimizeAndConvert($source, $destination)
    {
        $info = getimagesize($source);
        if (!$info) return false;

        $mime = $info['mime'];
        $width = $info[0];
        $height = $info[1];

        // Crear imagen desde origen
        switch ($mime) {
            case 'image/jpeg': $img = @imagecreatefromjpeg($source); break;
            case 'image/png': $img = @imagecreatefrompng($source); break;
            case 'image/gif': $img = @imagecreatefromgif($source); break;
            default: return false;
        }

        if (!$img) return false;

        // Redimensionar si es muy grande (max 1920px)
        $maxW = 1920;
        if ($width > $maxW) {
            $newH = ($height * $maxW) / $width;
            $newImg = imagecreatetruecolor($maxW, $newH);
            
            // Preservar transparencia para PNG/GIF
            if ($mime == 'image/png' || $mime == 'image/gif') {
                imagealphablending($newImg, false);
                imagesavealpha($newImg, true);
            }

            imagecopyresampled($newImg, $img, 0, 0, 0, 0, $maxW, $newH, $width, $height);
            imagedestroy($img);
            $img = $newImg;
        }

        // Guardar como WebP
        if (!imageistruecolor($img)) {
            imagepalettetotruecolor($img);
        }
        
        $result = imagewebp($img, $destination, 80);
        imagedestroy($img);

        return $result;
    }
}
