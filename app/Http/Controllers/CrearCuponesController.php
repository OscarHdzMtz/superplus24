<?php

namespace App\Http\Controllers;

use App\Models\CrearCupones;
use Illuminate\Http\Request;
use App\Models\Categorias;
use Psy\Readline\Hoa\Console;

class CrearCuponesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $getCupones = CrearCupones::all();        
        return view('crearcupones.index', compact('getCupones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categorias::orderBy('id' , 'desc')->pluck('name', 'id');            
        $codigoDeBarras = $this->generarNumeroCupon(12);    
        
        
        //return $categorias;        
        return view('crearcupones.createcupones', compact('categorias', 'codigoDeBarras'));
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
        $getTableCrearCupones = new CrearCupones();
        $getTableCrearCupones->user_id = auth()->id();
        $getTableCrearCupones->categoria_id  = $request->get('categoria_id');
        $getTableCrearCupones->titulo = request('titulo');
        $getTableCrearCupones->description = request('description');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/cupones', $file->getClientOriginalName());
            $getTableCrearCupones->image = $file->getClientOriginalName();
        }      
        if ($request->valorCodigoDeBarras == "") {
            //$longitudCodigoDeBarras = request('longitudCodigoDeBarras');
            $longitudCodigoDeBarras = $request->longitudCodigoDeBarras;
            $getTableCrearCupones->valorCodigoDeBarras = $this->generarNumeroCupon($longitudCodigoDeBarras);       
        } else {
            $getTableCrearCupones->valorCodigoDeBarras = request('valorCodigoDeBarras');
        }                
        $getTableCrearCupones->contadorCodigoDeBarras = request('inicioDeRangoGenerarCodigoDeBarras');
        $getTableCrearCupones->inicioDeRangoGenerarCodigoDeBarras = request('inicioDeRangoGenerarCodigoDeBarras');
        $getTableCrearCupones->finDeRangoGenerarCodigoDeBarras = request('finDeRangoGenerarCodigoDeBarras');        
        $getTableCrearCupones->fechaInicio = request('fechaInicio');
        $getTableCrearCupones->fechaFin = request('fechaFin');

        $getTableCrearCupones->save();
        return redirect('crearCupones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CrearCupones  $crearCupones
     * @return \Illuminate\Http\Response
     */
    public function show(CrearCupones $crearCupones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CrearCupones  $crearCupones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ////$promo = Publicoferts::join('role_user', 'Publicoferts.user_id' , '=', 'role_user.user_id')->join('users', 'role_user.user_id', '=', 'users.id')->select('Publicoferts.titulo', 'users.name')->get();
        //$categoriasEdit = Categorias::orderBy('id' , 'desc')->pluck('name', 'id');  
        $categoriasEdit = Categorias::orderBy('id' , 'desc')->get();  
        //$cuponesCate = CrearCupones::join('categorias','crear_cupones.categoria_id','=', 'categorias.id')->select('categorias.name', 'categorias.id')->get();  
        $cupones = CrearCupones::findOrFail($id);

        //return $cuponesCate;
        return view('crearcupones.editcupones', compact('cupones', 'categoriasEdit'/* , 'cuponesCate' */));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CrearCupones  $crearCupones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CrearCupones $crearCupones, $id)
    {
        //        
        $cupones = CrearCupones::findOrFail($id);
        $cupones->categoria_id  = $request->get('categoria_id');
        $cupones->titulo = request('titulo');
        $cupones->description = request('description');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/cupones', $file->getClientOriginalName());
            $cupones->image = $file->getClientOriginalName();
        }
        $cupones->fechaInicio = request('fechaInicio');
        $cupones->fechaFin = request('fechaFin');
        $cupones->update();
        return redirect('crearCupones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CrearCupones  $crearCupones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cupones = CrearCupones::findOrFail($id);    
        if(file_exists(public_path('img/cupones/' . $cupones->image)) AND !empty($cupones->image)){
            unlink(public_path('img/cupones/' . $cupones->image));
            $cupones->delete();
        }
        try{

            $cupones->delete();
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
                
        return redirect('crearCupones');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generarNumeroCupon($longitudCodigoDeBarras)
    {
        $arrayLongitud=array();                        
        for ($h=0; $h < $longitudCodigoDeBarras; $h++) { 
            $numeroRandom = rand(1, 9);
            $arrayLongitud[$h] = $numeroRandom;
        }
        $stringLongitud = implode($arrayLongitud);
        return $stringLongitud;
    }    
}
