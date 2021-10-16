<?php

namespace App\Http\Controllers;

use App\Models\Cardservicio;
use App\Models\Productos;
use App\Models\Proveedores;
use Illuminate\Http\Request;
use App\Models\Publicofert;
use App\Models\Slidermain;
use App\Models\Textoproducto;
use Carbon\Carbon;

class PublicofertController extends Controller
{
    public function index()
    {
        $ofertas = publicofert::orderBy('updated_at','DESC')->get();
        //return view('Instalacion.todas.index', ['Instalacion' => Instalacion::all()->where('user_id',auth()->id())]);
        /* return view('ofertas.todas.index', ['ofertas' => publicofert::all()]); */
        return view('ofertas.todas.index', compact('ofertas'));
    }
    public function ofertas()
    {
        /* varibales */
        $actualInicio = Carbon::today();
        $actualFin = Carbon::today();
        $ofertas = publicofert::where('deldia', 'on')->get();
        $productos = Productos::Orderby('updated_at','DESC')->get();
        $proveedores = Proveedores::all();    
        $slider = Slidermain::OrderBy('created_at','DESC')->where('fechaInicio','<=', $actualInicio)->where('fechaFin', '>=', $actualFin)->get();
        $servicios = Cardservicio::all();
        $texproduct = Textoproducto::orderBy('updated_at','DESC')->take(1)->get();
        return view('index', compact('ofertas', 'productos', 'proveedores', 'slider', 'servicios', 'texproduct'));
    }


    /* muestra las promociones en el apartado de promociones*/
    public function promo()
    {
        /* promocion ordenada de acuerdo a la fecha creada */
        $actualInicio = Carbon::today();
        $actualFin = Carbon::yesterday();        


        /* $fechafinsistema = Carbon::today(); */
        /* return $fechasistema; */ 
        /* $promo = publicofert::orderby('updated_at', 'DESC')->get(); */
        $promo = publicofert::where('fechaInicio','<=', $actualInicio)->where('fechaFin', '>=', $actualFin)->get();

        /* retorna la vista y le pasa las promociones de la base de datos */
        return view('promociones', compact('promo'));
        /* return $fechasistema; */
    }


    public function store(Request $request)
    {
        $oferta = new publicofert();

        $oferta->user_id = auth()->id();
        $oferta->titulo = request('titulo');
        $oferta->texto = request('texto');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/ofertas', $file->getClientOriginalName());
            $oferta->image = $file->getClientOriginalName();
        }
        $oferta->fechaInicio = request('fechaInicio');
        $oferta->fechaFin = request('fechaFin');
        $oferta->deldia = request('deldia');
        $oferta->save();
        return redirect('ofertas/todas');
    }
    public function edit($id)
    {
        return view('ofertas.todas.edit', ['oferta' => publicofert::findOrFail($id)]);
    }
    public function update(Request $request, $id)
    {
        $oferta = publicofert::findOrFail($id);
        $oferta->titulo = request('titulo');
        $oferta->texto = request('texto');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/ofertas', $file->getClientOriginalName());
            $oferta->image = $file->getClientOriginalName();
        }
        $oferta->fechaInicio = request('fechaInicio');
        $oferta->fechaFin = request('fechaFin');
        $oferta->deldia = request('deldia');
        $oferta->update();
        return redirect('ofertas/todas');
    }

    public function destroy($id)
    {
        $oferta = publicofert::findOrFail($id);
        
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
            alert('succes');
        }else{
            echo 'error';
        }
                
        return redirect('ofertas/todas');
    }
}
