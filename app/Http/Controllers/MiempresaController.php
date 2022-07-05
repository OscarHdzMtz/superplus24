<?php

namespace App\Http\Controllers;

use App\Models\Miempresa;
use App\Models\Politicaprivacidad;
use Illuminate\Http\Request;

class MiempresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = Miempresa::orderby('orden', 'ASC' )->get();        
        return view('miempresa.indexempresa', compact('empresa'));        
        //
    }
    public function indexfront(){
        $empresafront = Miempresa::orderby('orden', 'ASC' )->get();     
        
         /* obtener politicas de privacidad */
         $politicaprivacidad = Politicaprivacidad::orderby('orden', 'ASC')->get();
        return view('nosotros', compact('empresafront', 'politicaprivacidad'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('miempresa.creatempresa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getempresa = new Miempresa();        
        $getempresa->user_id = auth()->id();    
        $getempresa->orden = request('orden');    
        $getempresa->label = request('label');
        $getempresa->titulo = request('titulo');
        $getempresa->description = request('description');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/miempresa', $file->getClientOriginalName());
            $getempresa->image = $file->getClientOriginalName();
        }     
        if ($request->hasFile('imghover')) {
            $file = $request->imghover;
            $file->move(public_path() . '/img/miempresa', $file->getClientOriginalName());
            $getempresa->imghover = $file->getClientOriginalName();
        }               
        $getempresa->save();

        return redirect('miempresa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Miempresa  $miempresa
     * @return \Illuminate\Http\Response
     */
    public function show(Miempresa $miempresa)
    {
        //
         //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Miempresa  $miempresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Miempresa $miempresa)
    {
        //       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Miempresa  $miempresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $getempresa = new Miempresa();
        $getempresa = Miempresa::findOrFail($id);
        $getempresa->user_id = auth()->id();        
        $getempresa->titulo = request('titulo');
        $getempresa->description = request('description');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/miempresa', $file->getClientOriginalName());
            $getempresa->image = $file->getClientOriginalName();
        }
        if ($request->hasFile('imghover')) {
            $file = $request->imghover;
            $file->move(public_path() . '/img/miempresa', $file->getClientOriginalName());
            $getempresa->imghover = $file->getClientOriginalName();
        }        
        $getempresa->orden = request('orden');
        $getempresa->update();

        return redirect('miempresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Miempresa  $miempresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miempresa $miempresa)
    {
        //
    }
}
