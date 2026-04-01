<?php
use App\Models\Categorias;
use App\Models\Publicoferts;
use Illuminate\Support\Str;

$departmentNames = ['Abarrotes', 'Lácteos y Refrigerados', 'Limpieza', 'Mascotas', 'Vinos y Licores'];
$catIds = [];

// Crear las 5 categorías si no existen
foreach ($departmentNames as $name) {
    $cat = Categorias::where('name', $name)->first();
    if (!$cat) {
        $cat = new Categorias();
        $cat->name = $name;
        $cat->slug = Str::slug($name); // Fix the database constraint
        $cat->save();
    }
    $catIds[] = $cat->id;
}

// Recuperamos también las categorías de prueba originales
$oldCats = Categorias::where('name', 'like', '%Promociones Test%')->pluck('id')->toArray();
$allCatIds = array_merge($catIds, $oldCats);

$promos = Publicoferts::where('titulo', 'like', '%Prueba%')->get();
$updated = 0;

foreach($promos as $promo) {
    // Asignamos una categoría al azar de nuestra bolsa combinada
    $promo->categoria_id = $allCatIds[array_rand($allCatIds)];
    $promo->save();
    $updated++;
}

echo "\n--- DEPARTAMENTOS ACTUALIZADOS ---\n";
echo "Se crearon " . count($departmentNames). " nuevos departamentos (Abarrotes, Limpieza, etc.).\n";
echo "Se esparcieron los " . $updated . " productos de prueba por los " . count($allCatIds) . " departamentos diferentes.\n";
