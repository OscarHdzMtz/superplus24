<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use App\Models\Empleosetting;
use App\Models\Politicaprivacidad;
use App\Models\PublicidadEmergente;
use Illuminate\Http\Request;

class VacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vacanteplus = Vacante::orderby('updated_at', 'DESC')->get();
        return view('vacantes.indexvacante', compact('vacanteplus'));
    }

    public function setvacante(){
        $addvacante = Vacante::where('status','1')->orderby('updated_at', 'DESC')->get();
        $getempleo = Empleosetting::orderby('orden','ASC')->get();

         /* obtener politicas de privacidad */
         $politicaprivacidad = Politicaprivacidad::orderby('orden', 'ASC')->get();

         //ESTE CODIGO VALIDA SI MOSTRAR O NO LA PUBLICIDAD EN LA PAGINA
        $utilerias = new Utilerias();
        $arrayPublicidadEmergente = PublicidadEmergente::all()->toArray();    
        //NOMBRE A BUSCAR EN EL ARREGLO DE LAS PAGINAS  A MOSTRAR
        $URLnombrePagina = "empleo";
        $nombreImagenPublicidadEmergente = $utilerias->MostrarPublicidad($arrayPublicidadEmergente, $URLnombrePagina);   

        return view('empleo', compact('addvacante', 'getempleo', 'politicaprivacidad', 'nombreImagenPublicidadEmergente'));
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
        $addvacante = new Vacante();
        $addvacante->user_id = auth()->id();
        $addvacante->titulo = request('titulo');
        $addvacante->texto = request('texto');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/vacantes', $file->getClientOriginalName());
            $addvacante->image = $file->getClientOriginalName();
        }
        $addvacante->status = request('status') ? 1 : 0;
        $addvacante->save();
        return redirect('vacantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function show(Vacante $vacante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacante $vacante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $addvacante = Vacante::findOrFail($id);
        $addvacante->titulo = request('titulo');
        $addvacante->texto = request('texto');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/vacantes', $file->getClientOriginalName());
            $addvacante->image = $file->getClientOriginalName();
        }
        $addvacante->status = request('status') ? 1 : 0;
        $addvacante->update();
        return redirect('vacantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $addvacante = Vacante::findOrFail($id);
        unlink(public_path('img/vacantes/' .$addvacante->image));
        $addvacante->delete();
        return redirect('vacantes');
    }
}
