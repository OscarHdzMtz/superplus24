<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instalacion;
class InstalacionController extends Controller
{   
    public function index(){
         //return view('Instalacion.todas.index', ['Instalacion' => Instalacion::all()->where('user_id',auth()->id())]);
        return view('Instalacion.todas.index',['Instalacion' => Instalacion::all()]);
    }
    public function Instalacion(){
    
        $Instalacion = Instalacion::all();
        return view('nosotros', 
                    ['Instalacion' => $Instalacion]);
                    
    }
    public function store(Request $request)
    {
        $cliente = new Instalacion();
            
        $cliente->user_id = auth()->id();
        $cliente->nombre = request('nombre');
            if($request->hasFile('image')){
                $file = $request->image;
                $file->move(public_path(). '/img/Instalacion', $file->getClientOriginalName());
                $cliente->image = $file->getClientOriginalName();
    }
        $cliente->save();
        return redirect('Instalacion/todas');
    }
    public function edit($id)
    {
        return view('Instalacion.todas.edit',['cliente' => Instalacion::findOrFail($id)]);
    }
    public function update(Request $request,$id)
    {
        $cliente = Instalacion::findOrFail($id);
        $cliente->nombre = $request->get('nombre');
        if($request->hasFile('image')){
            $file = $request->image;
            $file->move(public_path(). '/img/Instalacion', $file->getClientOriginalName());
            $cliente->image = $file->getClientOriginalName();
    }
        $cliente->update(); 
        return redirect('Instalacion/todas');
    }

    public function destroy($id)
    {
        $cliente = Instalacion::findOrFail($id);
        unlink(public_path('img/Instalacion/'.$cliente->image));
        $cliente->delete();
        return redirect('Instalacion/todas');
    }
}
