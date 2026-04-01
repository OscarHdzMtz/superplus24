<?php
$words = ['Cerveza', 'Agua', 'Refresco', 'Vino', 'Licor', 'Botanas'];
$promos = \App\Models\Publicoferts::where('titulo', 'like', '%Prueba%')->get();
foreach($promos as $p) {
    if(!str_contains($p->titulo, 'Agua') && !str_contains($p->titulo, 'Cerveza')) {
        $p->titulo = $words[array_rand($words)] . ' ' . $p->titulo;
        $p->save();
    }
}
echo "Promos renombradas a: \n";
foreach(\App\Models\Publicoferts::where('titulo', 'like', '%Prueba%')->get() as $p) {
    echo $p->titulo . "\n";
}
