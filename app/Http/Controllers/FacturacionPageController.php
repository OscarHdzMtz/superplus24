<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacturacionPage;

class FacturacionPageController extends Controller
{
    //
    public function index()    
    {
        $getFacturacion =  FacturacionPage::orderby('orden','ASC')->get();
        return view('facturacion.index', compact('getFacturacion'));
    }

    public function store(Request $request){
        $facturacionadd = new FacturacionPage();
        $facturacionadd->user_id = auth()->id();  
        $facturacionadd->orden = request('orden');      
        $facturacionadd->label = request('label');  
        $facturacionadd->titulo = request('titulo');
        $facturacionadd->subtitulo = request('subtitulo');        
        $facturacionadd->description = request('description');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/facturacion', $file->getClientOriginalName());
            $facturacionadd->image = $file->getClientOriginalName();
        }        
        $facturacionadd->save();
        return redirect('facturacion');
    }

    public function update(Request $request, $id){
        $facturacionadd = new FacturacionPage;   
        $facturacionadd = FacturacionPage::findOrFail($id);
        $facturacionadd->user_id = auth()->id();  
        $facturacionadd->orden = request('orden');      
        /* $facturacionadd->label = request('label');   */
        $facturacionadd->titulo = request('titulo');
        $facturacionadd->subtitulo = request('subtitulo');        
        $facturacionadd->description = request('description');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/facturacion', $file->getClientOriginalName());
            $facturacionadd->image = $file->getClientOriginalName();
        }        
        $facturacionadd->update();
        return redirect('facturacion');
    }
    public function destroy($id)
    {
        //
             //
             $facturacionadd = FacturacionPage::findOrFail($id);
             $facturacionadd->delete();
             return redirect('facturacion');
    }
 
}
