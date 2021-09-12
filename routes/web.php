<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PublicofertController;
use App\Http\Controllers\StoreController;
use App\Models\publicofert;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/nosotros', [ClientesController::class, 'clientes']);/* Route::get('/nosotros', 'ClientesController@clientes'); */

Route::get('/productos', [StoreController::class, 'index']); /* Route::get('/productos', 'StoreController@index'); */

/* retorna solamente una vista */
Route::get('/contact', function () {
    return view('contact');
});

Route::get('productos/{slug}',
[
    'as'   => 'product-details',
    'uses' => 'StoreController@show'
]);

Route::get('categorias/{slug}',[
    'uses' => 'StoreController@searchCategory',
])->name('searchCategory');


Route::get('/empleo', function () {
    return view('empleo');
});
Route::get('/mapa', function () {
    return view('mapa');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* GESTION*/
Route::resource('usuarios','UserController')->middleware('auth')->middleware('auth');
Route::resource('roles','RoleController')->middleware('auth')->middleware('auth');
Route::resource('/clientes/todas', 'ClientesController')->middleware('auth');
Route::resource('/proveedores', 'ProveedoresController')->middleware('auth');
Route::resource('/ofertas/todas', 'PublicofertController')->middleware('auth');
Route::resource('/Categorias', 'CategoriasController')->middleware('auth');
Route::resource('/producto', 'ProductoController')->middleware('auth');

/*ADMIN*/