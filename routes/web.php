<?php

use App\Http\Controllers\CardservicioController;
use App\Http\Controllers\CategoriasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicofertController;
use App\Http\Controllers\MiempresaController;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CrearCuponesController;
use App\Http\Controllers\EmpleosettingController;
use App\Http\Controllers\FacturacionPageController;
use App\Http\Controllers\GenerarCuponesClientesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexsettingController;
use App\Http\Controllers\InstalacionController;
use App\Http\Controllers\PoliticaprivacidadController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\PublicidadEmergenteController;
use App\Http\Controllers\SlidermainController;
use App\Models\Publicoferts;

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

Route::resource('cupones',GenerarCuponesClientesController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    /* Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard'); */
    Route::get('/dashboard',[HomeController::class, 'dashboard_view'])->name('dashboard');
    Route::get('/perfil',[HomeController::class, 'configuser'])->name('config');
    

    Route::get('roles',[RoleController::class, 'index']);
    
    
    //USUARIOS
    Route::get('usuarios',[UserController::class, 'index']);    
    Route::post('usuarios/{id}/eliminar', [UserController::class, 'destroy'])->name('usuarios.destroy');
    Route::get('usuarios/{id}/show', [UserController::class, 'show'])->name('usuarios.show');
    Route::get('usuarios/{id}/edit', [UserController::class, 'edit'])->name('usuarios.edit');
    Route::post('usuarios/store', [UserController::class, 'store'])->name('usuarios.store');
    Route::put('usuarios/{id}/update', [UserController::class, 'update'])->name('usuarios.update');
    Route::post('usuarios/create', [UserController::class, 'create'])->name('usuarios.create');

    //CONFIGURACION 
    Route::get('configuracion',[IndexsettingController::class, 'index'])->name('configuracion');
    Route::patch('configuracion/{id}/update', [IndexsettingController::class, 'update'])->name('configuracion.update');
    Route::delete('configuracion/{id}/delete', [IndexsettingController::class, 'destroy'])->name('configuracion.delete');
    Route::post('configuracion/create', [IndexsettingController::class, 'store'])->name('configuracion.store');

    //SLIDERS
    Route::resource('slidermain', SlidermainController::class);

    //SERVICIOS
    Route::resource('cardservicio', CardservicioController::class);

    //PRODUCTOS NUEVOS
    Route::resource('producto', ProductoController::class);

    //MARCAS PROVEEDORES
    Route::resource('proveedores', ProveedoresController::class);

    //CATEGORIAS
    Route::resource('categorias', CategoriasController::class);

    //POLITICA DE PRIVACIDAD
    Route::resource('politicaprivacidad', PoliticaprivacidadController::class);

    //PROMOCIONES
    Route::resource('addpromociones', PublicofertController::class);

    Route::post('dragandrop/post', [PublicofertController::class, 'posts'])->name('dragandrop.sort');

    //OFERTAS DE TRABAJO
    Route::resource('ajustesempleo', EmpleosettingController::class);
    Route::resource('vacantes', VacanteController::class);

    //MI EMPRESA
    Route::resource('miempresa', MiempresaController::class);
    Route::resource('instalacion', InstalacionController::class);

    //FACTURACION
    Route::resource('facturacionPlus', FacturacionPageController::class);

    //CUPONES
    Route::resource('crearCupones', CrearCuponesController::class);

    //PUBLICIDAD
    Route::resource('crearPublicidad', PublicidadEmergenteController::class);

});
