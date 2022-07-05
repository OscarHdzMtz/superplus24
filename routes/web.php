<?php

use App\Http\Controllers\InstalacionController;
use App\Http\Controllers\PublicofertController;
use App\Http\Controllers\SlidermainController;
use App\Http\Controllers\StoreController;
use App\Models\publicofert;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\MiempresaController;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\IndexsettingController;
use App\Models\Vacante;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*NAVBAR*/
Route::get('/', [PublicofertController::class, 'ofertas']);/* Route::get('/', 'PublicofertController@ofertas'); */

Route::get('/promociones', [PublicofertController::class, 'promo']); /* Route::get('/promociones', 'PublicofertController@promo');  asi se hace con laravel 7*/

Route::get('/nosotros', [MiempresaController::class, 'indexfront']);/* Route::get('/nosotros', 'InstalacionController@Instalacion'); */

/* Route::get('/productos', [StoreController::class, 'index']);  *//* Route::get('/productos', 'StoreController@index'); */

Route::get('/empleo', [VacanteController::class, 'setvacante']);

/* Ruta de contactanos para el envio de correo*/
Route::get('/contact', [ContactanosController::class, 'index'])->name('contact');
Route::post('/contact', [ContactanosController::class, 'store'])->name('contact.store');


Route::get('productos/{slug}',
[
    'as'   => 'product-details',
    'uses' => 'StoreController@show'
]);

Route::get('categorias/{slug}',[
    'uses' => 'StoreController@searchCategory',
])->name('searchCategory');


/* Route::get('/empleo', function () {
    return view('empleo');
}); */
Route::get('/mapa', function () {
    return view('mapa');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* GESTION*/
Route::resource('usuarios','UserController')->middleware('auth')->middleware('auth');
Route::resource('roles','RoleController')->middleware('auth')->middleware('auth');
Route::resource('/Instalacion/todas', 'InstalacionController')->middleware('auth');
Route::resource('/proveedores', 'ProveedoresController')->middleware('auth');
Route::resource('/addpromociones', 'PublicofertController')->middleware('auth');
Route::resource('/Categorias', 'CategoriasController')->middleware('auth');
Route::resource('/producto', 'ProductoController')->middleware('auth');
Route::resource('/slidermain', 'SlidermainController')->middleware('auth');
Route::resource('/cardservicio', 'CardservicioController')->middleware('auth');
Route::resource('/textoproducto', 'TextoproductoController')->middleware('auth');
Route::resource('/miempresa', 'MiempresaController')->middleware('auth');
Route::resource('/vacantes', 'VacanteController')->middleware('auth');
Route::resource('/configuracion', 'IndexsettingController')->middleware('auth');
Route::resource('/ajustesempleo', 'EmpleosettingController')->middleware('auth');
Route::resource('/politicaprivacidad', 'PoliticaprivacidadController')->middleware('auth');
