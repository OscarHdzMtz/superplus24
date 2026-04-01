<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

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

                    $oldPath = public_path($config['path'] . '/' . $oldName);
                    if (!File::exists($oldPath)) {
                        continue;
                    }

                    $newName = pathinfo($oldName, PATHINFO_FILENAME) . '.webp';
                    $newPath = public_path($config['path'] . '/' . $newName);

                    if ($this->optimizeAndConvert($oldPath, $newPath)) {
                        DB::table($table)->where('id', $item->id)->update([$column => $newName]);
                        $this->line("Optimizado [{$column}]: {$oldName} -> {$newName}");
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
            case 'image/jpeg': $img = imagecreatefromjpeg($source); break;
            case 'image/png': $img = imagecreatefrompng($source); break;
            case 'image/gif': $img = imagecreatefromgif($source); break;
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
        $result = imagewebp($img, $destination, 80);
        imagedestroy($img);

        return $result;
    }
}
