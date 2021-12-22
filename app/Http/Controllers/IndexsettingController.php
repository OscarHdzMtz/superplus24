<?php

namespace App\Http\Controllers;

use App\Models\indexsetting;
use Illuminate\Http\Request;

class IndexsettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $setting = indexsetting::Orderby('orden', 'ASC')->get();
        return view('indexsetting.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $addsetting = new indexsetting();
        $addsetting->user_id = auth()->id(); 
        $addsetting->label = request('label');
        $addsetting->orden = request('orden');            
        $addsetting->titulo = request('titulo');
        $addsetting->description = request('description');
        $addsetting->icono = request('icono');
        $addsetting->titulobtn = request('titulobtn');
        $addsetting->redireccion = request('redireccion');
        $addsetting->modal = request('modal') ? 1 : 0;
        $addsetting->save();
        return redirect('configuracion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\indexsetting  $indexsetting
     * @return \Illuminate\Http\Response
     */
    public function show(indexsetting $indexsetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\indexsetting  $indexsetting
     * @return \Illuminate\Http\Response
     */
    public function edit(indexsetting $indexsetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\indexsetting  $indexsetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $addsetting = indexsetting::findOrFail($id);     
        /* $addsetting->label = request('label'); */
        $addsetting->orden = request('orden');            
        $addsetting->titulo = request('titulo');
        $addsetting->description = request('description');
        $addsetting->icono = request('icono');
        $addsetting->titulobtn = request('titulobtn');
        $addsetting->redireccion = request('redireccion');
        $addsetting->modal = request('modal') ? 1 : 0;
        $addsetting->update();
        return redirect('configuracion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\indexsetting  $indexsetting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $addsetting = indexsetting::findOrFail($id);
        $addsetting->delete();
        return redirect('configuracion');
    }
}
