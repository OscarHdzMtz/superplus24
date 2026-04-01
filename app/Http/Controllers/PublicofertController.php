<?php

namespace App\Http\Controllers;

use App\Models\Cardservicio;
use App\Models\Productos;
use App\Models\Categorias;
use App\Models\Proveedores;
use Illuminate\Http\Request;
use App\Models\Publicoferts;
use App\Models\Slidermain;
use App\Models\Textoproducto;
use App\Models\Indexsetting;
use App\Models\Politicaprivacidad;
use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Requests\SaveProductoRequest;
use App\Models\PublicidadEmergente;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class PublicofertController extends Controller
{
    public function index(Request $request)
    {
        $actualInicio = Carbon::today();
        $actualFin = Carbon::yesterday();
        $countCatalogados = Publicoferts::where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->count();
        $countDesatalogados = Publicoferts::where('fechaInicio', '<', $actualInicio)->where('fechaFin', '<', $actualFin)->count();
        if ($request) {
            $query = trim($request->get('search'));
            $descatalogados = $request->get('descatalogados');
            if ($descatalogados <> null) {
                $ofertas = Publicoferts::where('titulo', 'LIKE', '%' . $query . '%')
                ->orderBy('orden', 'ASC')->get();
            }
            else {
                $ofertas = Publicoferts::where('titulo', 'LIKE', '%' . $query . '%')->where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)
                ->orderBy('orden', 'ASC')->get();
            }
            return view('addpromociones.index', ['ofertas' => $ofertas, 'search' => $query, 'countCatalogados' => $countCatalogados, 'countDesatalogados' => $countDesatalogados]);
        }
    }
    public function ofertas()
    {
        $actualInicio = Carbon::today();
        $actualFin = Carbon::yesterday();

        $cacheKey = 'landing_index_' . $actualInicio->toDateString();
        $cached = Cache::get($cacheKey);

        if ($cached) {
            extract($cached);
        } else {
            $ofertas = Publicoferts::where('deldia', '1')->where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->get();
            $productos = Productos::Orderby('updated_at', 'DESC')->get();
            $proveedores = Proveedores::all();
            $sliderindex = Slidermain::where('pagina', 'LIKE', '%index%')
                ->where('fechaInicio', '<=', $actualInicio)
                ->where('fechaFin', '>=', $actualFin)
                ->OrderBy('created_at', 'DESC')->get();
            $servicios = Cardservicio::all();
            $texproduct = Textoproducto::orderBy('updated_at', 'DESC')->take(1)->get();
            $allSettings = Indexsetting::all();
            $gettarjeta = $allSettings->where('label', 'tarjeta')->sortBy('orden');
            $getimagen = $allSettings->where('label', 'imagenfooter');
            $getitulo = $allSettings;
            $politicaprivacidad = Politicaprivacidad::orderby('orden', 'ASC')->get();

            $utilerias = new Utilerias();
            $arrayPublicidadEmergente = PublicidadEmergente::where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->OrderBy('updated_at', 'DESC')->get();
            $URLnombrePagina = "index";
            $idPublicidadSeleccionado = $utilerias->MostrarPublicidad($arrayPublicidadEmergente->toArray(), $URLnombrePagina);
            if ($idPublicidadSeleccionado) {
                $getPublicidadSeleccionado = PublicidadEmergente::findOrFail($idPublicidadSeleccionado);
            } else {
                $getPublicidadSeleccionado = "";
            }

            Cache::put($cacheKey, compact('ofertas', 'productos', 'proveedores', 'sliderindex', 'servicios', 'texproduct', 'gettarjeta', 'getitulo', 'getimagen', 'politicaprivacidad', 'getPublicidadSeleccionado'), now()->addMinutes(5));
        }

        $valorCookiePreloader = cookie::get('val_preloader');
        if (!$valorCookiePreloader) {
            cookie::queue('val_preloader', "Aceptado", 60);
        }
        return view('index', compact('ofertas', 'productos', 'proveedores', 'servicios', 'texproduct', 'sliderindex', 'gettarjeta', 'getitulo', 'getimagen', 'politicaprivacidad', 'getPublicidadSeleccionado', 'valorCookiePreloader'));
    }


    public function promo(Request $request)
    {
        $actualInicio = Carbon::today();
        $actualFin = Carbon::yesterday();

        $categoriaBuscar = $request->get('category');
        if ($categoriaBuscar <> '') {
            $promo = Publicoferts::where('fechaInicio', '<=', $actualInicio)
                ->where('fechaFin', '>', $actualFin)
                ->where('categoria_id', $categoriaBuscar)
                ->OrderBy('orden', 'ASC')->get();
        } else {
            $promo = Publicoferts::where('fechaInicio', '<=', $actualInicio)
                ->where('fechaFin', '>', $actualFin)
                ->OrderBy('orden', 'ASC')->get();
        }

        $slider = Slidermain::where('pagina', 'LIKE', '%promociones%')
            ->where('fechaInicio', '<=', $actualInicio)
            ->where('fechaFin', '>=', $actualFin)
            ->OrderBy('created_at', 'DESC')->get();

        $politicaprivacidad = Politicaprivacidad::orderby('orden', 'ASC')->get();

        $categorias = Publicoferts::where('fechaInicio', '<=', $actualInicio)
            ->where('fechaFin', '>', $actualFin)
            ->join('categorias', 'publicoferts.categoria_id', '=', 'categorias.id')
            ->select('categorias.id', 'categorias.name')
            ->distinct()->get();

        $utilerias = new Utilerias();
        $arrayPublicidadEmergente = PublicidadEmergente::where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->OrderBy('updated_at', 'DESC')->get();
        $URLnombrePagina = "promociones";
        $idPublicidadSeleccionado = $utilerias->MostrarPublicidad($arrayPublicidadEmergente->toArray(), $URLnombrePagina);
        if ($idPublicidadSeleccionado) {
            $getPublicidadSeleccionado = PublicidadEmergente::findOrFail($idPublicidadSeleccionado);
        }else {
            $getPublicidadSeleccionado = "";
        }

        return view('promociones', compact('promo', 'slider', 'politicaprivacidad', 'categorias', 'categoriaBuscar', 'getPublicidadSeleccionado'));
    }

    public function create()
    {
        //
        $categorias = Categorias::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('addpromociones.createpromo', compact('categorias'));
    }

    public function posts(Request $request){
        $orden = 1;
        $sorts = $request->get('sorts');

        foreach ($sorts as $sort) {
            $post = Publicoferts::find($sort);    
            $post->orden = $orden;
            $post->save();
            $orden++;                    
        }
    }

    public function store(Request $request)
    {
        $oferta = new Publicoferts();

        $oferta->user_id = auth()->id();
        $oferta->categoria_id  = $request->get('categoria_id');
        $oferta->titulo = request('titulo');
        $oferta->texto = request('texto');
        
        if ($request->hasFile('image')) {
            $oferta->image = Utilerias::optimizeAndSaveImage($request->file('image'), 'img/ofertas');
        }

        $oferta->fechaInicio = request('fechaInicio');
        $oferta->fechaFin = request('fechaFin');
        $oferta->deldia = request('deldia') ? 1 : 0;
        $oferta->save();

        return redirect('addpromociones');
    }
    public function edit($id)
    {
        return view('addpromociones.edit', ['oferta' => Publicoferts::findOrFail($id)]);
    }
    public function update(Request $request, $id)
    {
        $oferta = Publicoferts::findOrFail($id);
        $oferta->titulo = request('titulo');
        $oferta->texto = request('texto');

        if ($request->hasFile('image')) {
            $oferta->image = Utilerias::optimizeAndSaveImage($request->file('image'), 'img/ofertas');
        }

        $oferta->fechaInicio = request('fechaInicio');
        $oferta->fechaFin = request('fechaFin');
        $oferta->deldia       = $request->get('deldia') ? 1 : 0;
        $oferta->update();

        return redirect('addpromociones');
    }

    public function destroy($id)
    {
        $oferta = Publicoferts::findOrFail($id);

        if ($oferta->image && File::exists(public_path('img/ofertas/' . $oferta->image))) {
            File::delete(public_path('img/ofertas/' . $oferta->image));
        }

        try {
            $oferta->delete();
        } catch (\Exception $e) {
            return "error";
        }

        return redirect('addpromociones');
    }
}
