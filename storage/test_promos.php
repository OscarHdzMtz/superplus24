<?php

use App\Models\Categorias;
use App\Models\Publicoferts;
use App\Models\User;
use Carbon\Carbon;

$user = User::first();
$userId = $user ? $user->id : 1;

$cat = Categorias::first();
if (!$cat) {
    $cat = new Categorias();
    $cat->name = 'Promociones Test';
    $cat->save();
}

$images = ['34.jpg', '35.jpg', '36.jpg', '37.jpg', '38.jpg', '39.jpg'];
$count = 1;
foreach($images as $img) {
    $oferta = new Publicoferts();
    $oferta->user_id = $userId;
    $oferta->categoria_id = $cat->id;
    $oferta->titulo = 'Promo Prueba ' . $count;
    $oferta->texto = 'Bebidas y snacks al ' . (10 * $count) . '% de descuento';
    $oferta->image = $img;
    $oferta->fechaInicio = Carbon::today()->subDays(2);
    $oferta->fechaFin = Carbon::today()->addDays(10);
    $oferta->deldia = 1;
    $oferta->orden = $count;
    $oferta->save();
    $count++;
}
echo "Promociones seed completado correctamente.\n";
