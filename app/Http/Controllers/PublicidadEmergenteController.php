<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\PublicidadEmergente;
use Illuminate\Http\Request;

class PublicidadEmergenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publicidad = PublicidadEmergente::all();
        return view('addpublicidademergente.index', compact('publicidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Categorias::orderBy('name', 'asc')->pluck('name', 'id');

        return view('addpublicidademergente.create', compact('categorias'));
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
        $publicidad = new PublicidadEmergente();

        $publicidad->user_id = auth()->id();
        $publicidad->categoria_id  = $request->get('categoria_id');
        $publicidad->titulo = request('titulo');
        $publicidad->description = request('description');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/publicidadEmergente', $file->getClientOriginalName());
            $publicidad->image = $file->getClientOriginalName();
        }
        $publicidad->fechaInicio = request('fechaInicio');
        $publicidad->fechaFin = request('fechaFin');
        $publicidad->prioridad = request('prioridad') ? 1 : 0;
        $publicidad->save();
        return redirect('crearPublicidad');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PublicidadEmergente  $publicidadEmergente
     * @return \Illuminate\Http\Response
     */
    public function show(PublicidadEmergente $publicidadEmergente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PublicidadEmergente  $publicidadEmergente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $publicidadEmergente, $id)
    {
        //        
        $getPublicidadEditar = PublicidadEmergente::findorFail($id);
        /* return $getPublicidadEditar; */
        $categorias = Categorias::orderBy('name', 'asc')->get();

        return view('addpublicidademergente.edit', compact('getPublicidadEditar', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PublicidadEmergente  $publicidadEmergente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $publicidadEmergente, $id)
    {
        //
        $getPublicidadEditar = PublicidadEmergente::findorFail($id);

        $getPublicidadEditar->user_id = auth()->id();
        $getPublicidadEditar->categoria_id  = $publicidadEmergente->get('categoria_id');
        $getPublicidadEditar->titulo = request('titulo');
        $getPublicidadEditar->description = request('description');
        if ($publicidadEmergente->hasFile('image')) {
            $file = $publicidadEmergente->image;
            $file->move(public_path() . '/img/publicidadEmergente', $file->getClientOriginalName());
            $getPublicidadEditar->image = $file->getClientOriginalName();
        }
        $getPublicidadEditar->fechaInicio = request('fechaInicio');
        $getPublicidadEditar->fechaFin = request('fechaFin');
        $getPublicidadEditar->prioridad = request('prioridad') ? 1 : 0;
        $getPublicidadEditar->save();
        return redirect('crearPublicidad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PublicidadEmergente  $publicidadEmergente
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicidadEmergente $publicidadEmergente, $id)
    {
        //
        $getPublicidadEliminar = PublicidadEmergente::findorfail($id);

        $getPublicidadEliminar->delete();
        return redirect('crearPublicidad');
    }
}
