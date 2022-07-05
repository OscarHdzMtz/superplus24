<?php

namespace App\Http\Controllers;

use App\Models\Politicaprivacidad;
use Illuminate\Http\Request;

class PoliticaprivacidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $politicaprivacidad = Politicaprivacidad::orderby('orden', 'ASC')->get();
        /* return $politicaprivacidad; */
        return view('politicaprivacidad.indexpolitica', compact('politicaprivacidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Politicaprivacidad.createpolitica');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $getpolitica = new Politicaprivacidad();        
        $getpolitica->user_id = auth()->id();    
        $getpolitica->orden = request('orden'); 
        $getpolitica->texto = request('texto');
        $getpolitica->save();

        return redirect('politicaprivacidad');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Politicaprivacidad  $politicaprivacidad
     * @return \Illuminate\Http\Response
     */
    public function show(Politicaprivacidad $politicaprivacidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Politicaprivacidad  $politicaprivacidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Politicaprivacidad $politicaprivacidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Politicaprivacidad  $politicaprivacidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $addpolitica = Politicaprivacidad::findOrFail($id);     
        /* $addsetting->label = request('label'); */
        $addpolitica->orden = request('orden');
        $addpolitica->texto = request('texto');   
        $addpolitica->update();
        return redirect('politicaprivacidad');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Politicaprivacidad  $politicaprivacidad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $addpolitica = Politicaprivacidad::findOrFail($id);        
        $addpolitica->delete();
        return redirect('politicaprivacidad');
    }
}
