<?php

namespace App\Http\Controllers;

use App\Models\Instalacion;
use App\Models\Productos;
use App\Models\Proveedores;
use App\Models\Publicoferts;
use App\Models\User;
use App\Models\Categorias;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cons_user = User::count();
        $cons_ofertas = Publicoferts::count();
        $cons_productos = Productos::count();
        $cons_categorias = Categorias::count();
        $cons_proveedores = proveedores::count();        
        return view('home',compact('cons_user','cons_ofertas','cons_productos','cons_categorias','cons_proveedores'));
    }
}
