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

class PublicofertController extends Controller
{
    public function index()
    {
        $ofertas = Publicoferts::orderBy('updated_at','DESC')->get();
        //return view('Instalacion.todas.index', ['Instalacion' => Instalacion::all()->where('user_id',auth()->id())]);
        /* return view('addpromociones.index', ['ofertas' => publicofert::all()]); */
        return view('addpromociones.index', compact('ofertas'));
    }
    public function ofertas()
    {
        /* varibales */
        $actualInicio = Carbon::today();
        $actualFin = Carbon::today();
        $ofertas = Publicoferts::where('deldia', '1')->get();
        $productos = Productos::Orderby('updated_at','DESC')->get();
        $proveedores = Proveedores::all();    
        $sliderindex = Slidermain::OrderBy('created_at','DESC')
                                    ->where('pagina','LIKE', '%index%')
                                    ->where('fechaInicio','<=', $actualInicio)
                                    ->where('fechaFin', '>=', $actualFin)->get(); 
        /* return $array;       */        
        $servicios = Cardservicio::all();
        $texproduct = Textoproducto::orderBy('updated_at','DESC')->take(1)->get();
        $gettarjeta = Indexsetting::Orderby('orden', 'ASC')->
                                    where('label', 'tarjeta')->get();
        $getitulo = Indexsetting::all();
        $getimagen = Indexsetting::where('label','imagenfooter')->get();
        /* obtener politicas de privacidad */
        $politicaprivacidad = Politicaprivacidad::orderby('orden', 'ASC')->get();
        return view('index', compact('ofertas', 'productos', 'proveedores', 'servicios', 'texproduct', 'sliderindex', 'gettarjeta', 'getitulo', 'getimagen', 'politicaprivacidad'));
    }


    /* muestra las promociones en el apartado de promociones*/
    public function promo()
    {
        /* promocion ordenada de acuerdo a la fecha creada */
        $actualInicio = Carbon::today();
        $actualFin = Carbon::yesterday();          
        $promo = Publicoferts::OrderBy('updated_at','DESC')->where('fechaInicio','<=', $actualInicio)->where('fechaFin', '>=', $actualFin)->get();

        /* SLIDER */
        $slider = Slidermain::OrderBy('created_at','DESC')
        ->where('pagina','LIKE', '%promociones%')
        ->where('fechaInicio','<=', $actualInicio)
        ->where('fechaFin', '>=', $actualFin)->get();

          /* obtener politicas de privacidad */
          $politicaprivacidad = Politicaprivacidad::orderby('orden', 'ASC')->get();

        /* retorna la vista y le pasa las promociones de la base de datos */
        return view('promociones', compact('promo', 'slider', 'politicaprivacidad'));
        /* return $fechasistema; */
    }

    public function create()
    {
        //
        $categorias = Categorias::orderBy('id' , 'desc')->pluck('name', 'id');        
        return view('addpromociones.createpromo', compact('categorias'));
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
        
        if(file_exists(public_path('img/ofertas/' . $oferta->image)) AND !empty($oferta->image)){
            unlink(public_path('img/ofertas/' . $oferta->image));
            $oferta->delete();
        }
        try{

            $oferta->delete();
            $bug = 0;
        }
        catch(\Exception $e){
            $bug = $e->errorInfo[1];
        } 
        if($bug==0){
            echo('succes');
        }else{
            echo 'error';
        }
                
        return redirect('addpromociones');
    }
}
