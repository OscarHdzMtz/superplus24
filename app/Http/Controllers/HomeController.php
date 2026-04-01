<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Publicoferts;
use App\Models\User;
use App\Models\Categorias;
use App\Models\proveedores;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function dashboard_view()
    {
        return view('home');
    }

    public function configuser()
    {
        return view('profile.show');
    }
}
