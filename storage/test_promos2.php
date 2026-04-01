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
    $cat->name = 'Promociones Test Extras';
    $cat->save();
}

// 30 images
$images = [
    '40.jpg', '41.jpg', '42.jpg', '43.jpg', '44.jpg', '45.jpg', '46.jpg', '47.jpg', '48.jpg', '49.jpg',
    '50.jpg', '51.jpg', '52.jpg', '53.jpg', '54.jpg', '55.jpg', '56.jpg', '57.jpg', '58.jpg', '59.jpg',
    '60.jpg', '61.jpg', '62.jpg', '63.jpg', '64.jpg', '65.jpg', '66.jpg', '67.jpg', '68.jpg', '69.jpg'
];

$count = 7;
foreach($images as $img) {
    $oferta = new Publicoferts();
    $oferta->user_id = $userId;
    $oferta->categoria_id = $cat->id;
    $oferta->titulo = 'Masiva Promo Prueba ' . $count;
    $oferta->texto = '¡Sorpresa total! Promoción masiva ' . $count;
    $oferta->image = $img;
    $oferta->fechaInicio = Carbon::today()->subDays(rand(1,5));
    $oferta->fechaFin = Carbon::today()->addDays(rand(5,20));
    $oferta->deldia = 1;
    $oferta->orden = $count;
    $oferta->save();
    $count++;
}
echo "30 Promociones extra añadidas correctamente.\n";
