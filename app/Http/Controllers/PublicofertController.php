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

use function GuzzleHttp\Promise\queue;

class PublicofertController extends Controller
{
    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('search'));
            $ofertas = Publicoferts::where('titulo', 'LIKE', '%' . $query . '%')
            /* ->orderBy('updated_at', 'ASC') */->get();
            return view('addpromociones.index', ['ofertas' => $ofertas, 'search' => $query]);
        }

        /* $ofertas = Publicoferts::orderBy('updated_at','DESC')->get(); */
        //return view('Instalacion.todas.index', ['Instalacion' => Instalacion::all()->where('user_id',auth()->id())]);
        /* return view('addpromociones.index', ['ofertas' => publicofert::all()]); */
        /* return view('addpromociones.index', compact('ofertas')); */
    }
    public function ofertas()
    {
        /* varibales */
        $actualInicio = Carbon::today();
        $actualFin = Carbon::yesterday();
        $ofertas = Publicoferts::where('deldia', '1')->where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->get();
        $productos = Productos::Orderby('updated_at', 'DESC')->get();
        $proveedores = Proveedores::all();
        $sliderindex = Slidermain::OrderBy('created_at', 'DESC')
            ->where('pagina', 'LIKE', '%index%')
            ->where('fechaInicio', '<=', $actualInicio)
            ->where('fechaFin', '>=', $actualFin)->get();
        $servicios = Cardservicio::all();
        $texproduct = Textoproducto::orderBy('updated_at', 'DESC')->take(1)->get();
        $gettarjeta = Indexsetting::Orderby('orden', 'ASC')->where('label', 'tarjeta')->get();
        $getitulo = Indexsetting::all();
        $getimagen = Indexsetting::where('label', 'imagenfooter')->get();
        $politicaprivacidad = Politicaprivacidad::orderby('orden', 'ASC')->get();

        //ESTE CODIGO VALIDA SI MOSTRAR O NO LA PUBLICIDAD EN LA PAGINA
        $utilerias = new Utilerias();        
        $arrayPublicidadEmergente = PublicidadEmergente::OrderBy('updated_at', 'DESC')->where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->get()->toArray();      
        $URLnombrePagina = "index";
        $idPublicidadSeleccionado = $utilerias->MostrarPublicidad($arrayPublicidadEmergente, $URLnombrePagina);        
        if ($idPublicidadSeleccionado) {
            $getPublicidadSeleccionado = PublicidadEmergente::findOrFail($idPublicidadSeleccionado);
        }else {
            $getPublicidadSeleccionado = "";
        }
        
        //VALIDAR SI MOSTRAR O NO EL PRELOADER
        $valorCookiePreloader = cookie::get('val_preloader');
        if (!$valorCookiePreloader) {
            cookie::queue('val_preloader', "Aceptado", 60);
        }                
        return view('index', compact('ofertas', 'productos', 'proveedores', 'servicios', 'texproduct', 'sliderindex', 'gettarjeta', 'getitulo', 'getimagen', 'politicaprivacidad', 'getPublicidadSeleccionado', 'valorCookiePreloader'));
    }


    /* muestra las promociones en el apartado de promociones*/
    public function promo(Request $request)
    {
        $actualInicio = Carbon::today();
        $actualFin = Carbon::yesterday();
        $idCategory = 0;

        $categoriasArray = Categorias::all()->toArray();
        $categoriaBuscar = $request->get('category');
        if ($categoriaBuscar <> '' /* AND $categoriaBuscar <> "Filtre por departamento" */) {
            for ($buscarIdCategory = 0; $buscarIdCategory < count($categoriasArray); $buscarIdCategory++) {
                $valCategoriaRecorrida = $categoriasArray[$buscarIdCategory]['name'];
                if ($valCategoriaRecorrida === $categoriaBuscar) {
                    $idCategory = $categoriasArray[$buscarIdCategory]['id'];
                }
            }
            $promo = Publicoferts::OrderBy('updated_at', 'DESC')->where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->where('categoria_id', $categoriaBuscar)->get();
        } else {
            $promo = Publicoferts::OrderBy('updated_at', 'DESC')->where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->get();
        }

        //EJEMPLOS DE CONSULTAS JOIN
        //$promo = Publicoferts::join('role_user', 'Publicoferts.user_id' , '=', 'role_user.user_id')->join('users', 'role_user.user_id', '=', 'users.id')->select('Publicoferts.titulo', 'users.name')->get();


        /* SLIDER */
        $slider = Slidermain::OrderBy('created_at', 'DESC')
            ->where('pagina', 'LIKE', '%promociones%')
            ->where('fechaInicio', '<=', $actualInicio)
            ->where('fechaFin', '>=', $actualFin)->get();

        /* obtener politicas de privacidad */
        $politicaprivacidad = Politicaprivacidad::orderby('orden', 'ASC')->get();

        $consulataBDCategorias = Publicoferts::where('fechaInicio', '<=', $actualInicio)
                                ->where('fechaFin', '>', $actualFin)
                                ->join('categorias', 'publicoferts.categoria_id', '=', 'categorias.id')
                                ->select('categorias.id', 'categorias.name')->get();                                
        $arrayCategoria = $consulataBDCategorias->toArray();
        //ELIMINAMOS LOS ID_CATEGORIA REPETIDOS en el array
        $categorias = array_unique($arrayCategoria, SORT_REGULAR);        

        //ESTE CODIGO VALIDA SI MOSTRAR O NO LA PUBLICIDAD EN LA PAGINA        
        $utilerias = new Utilerias();
        $arrayPublicidadEmergente = PublicidadEmergente::OrderBy('updated_at', 'DESC')->where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->get()->toArray();    
        //NOMBRE A BUSCAR EN EL ARREGLO DE LAS PAGINAS  A MOSTRAR
        $URLnombrePagina = "promociones";
        $idPublicidadSeleccionado = $utilerias->MostrarPublicidad($arrayPublicidadEmergente, $URLnombrePagina);        
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
        $categorias = Categorias::orderBy('id', 'desc')->pluck('name', 'id');
        return view('addpromociones.createpromo', compact('categorias'));
    }

    public function posts(Request $request){
        $position = 1;
        $sorts = $request->get('sorts');

        foreach ($sorts as $sort) {
            $post = Publicoferts::find($sort);    
            $post->orden = $position;
            $post->save();
            $position++;                    
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
            $file = $request->image;
            $file->move(public_path() . '/img/ofertas', $file->getClientOriginalName());
            $oferta->image = $file->getClientOriginalName();
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
            $file = $request->image;
            $file->move(public_path() . '/img/ofertas', $file->getClientOriginalName());
            $oferta->image = $file->getClientOriginalName();
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

        if (file_exists(public_path('img/ofertas/' . $oferta->image)) and !empty($oferta->image)) {
            unlink(public_path('img/ofertas/' . $oferta->image));
            $oferta->delete();
        }
        try {

            $oferta->delete();
            $bug = 0;
        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
        }
        if ($bug == 0) {
            echo ('succes');
        } else {
            echo 'error';
        }

        return redirect('addpromociones');
    }
}
