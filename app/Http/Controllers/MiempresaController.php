<?php

namespace App\Http\Controllers;

use App\Models\Miempresa;
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
        $empresa = Miempresa::all();
        return view('Miempresa.indexempresa', compact('empresa'));        
        //
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
    public function update(Request $request, Miempresa $miempresa)
    {
        //
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
