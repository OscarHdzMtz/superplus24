<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class AdminSidebarComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $counts = Cache::remember('admin_stats', 300, function () {
            return [
                'users_count' => DB::table('users')->count(),
                'slider_count' => DB::table('slidermains')->count(),
                'producto_count' => DB::table('productos')->count(),
                'promo_count' => DB::table('publicoferts')->count(),
                'categorias_count' => DB::table('categorias')->count(),
                'proveedores_count' => DB::table('proveedores')->count(),
                // Alíases para compatibilidad con HomeController
                'cons_user' => DB::table('users')->count(),
                'cons_ofertas' => DB::table('publicoferts')->count(),
                'cons_productos' => DB::table('productos')->count(),
                'cons_categorias' => DB::table('categorias')->count(),
                'cons_proveedores' => DB::table('proveedores')->count(),
            ];
        });

        foreach ($counts as $name => $count) {
            $view->with($name, $count);
        }
    }
}
