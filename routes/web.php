<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicofertController;
use App\Http\Controllers\MiempresaController;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\FacturacionPageController;
use App\Http\Controllers\GenerarCuponesClientesController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', [PublicofertController::class, 'ofertas']);

Route::get('/promociones', [PublicofertController::class, 'promo']); /* Route::get('/promociones', 'PublicofertController@promo');  asi se hace con laravel 7*/

Route::get('/nosotros', [MiempresaController::class, 'indexfront']);
Route::get('/empleo', [VacanteController::class, 'setvacante']);
Route::get('/contact', [ContactanosController::class, 'index'])->name('contact');
Route::post('/contact', [ContactanosController::class, 'store'])->name('contact.store');
Route::get('/facturacion', [FacturacionPageController::class, 'indexFrontEnd']);

/* Route::resource('/cupones','GenerarCuponesClientesController'); */
// Rutas para mostrar el formulario de creación de cupones
Route::get('/cupones', [GenerarCuponesClientesController::class, 'index'])->name('cupones');
Route::post('/cupones', [GenerarCuponesClientesController::class, 'store'])->name('cupones.store');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
