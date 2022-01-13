<?php

namespace App\Http\Controllers;

use App\Models\Empleosetting;
use Illuminate\Http\Request;

class EmpleosettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $getempleo = Empleosetting::where('label', '!=', 'contadores')->
                                    orderby('orden','ASC')->get();
        $getcounter = Empleosetting::where('label','contadores')->
                                    orderby('orden','ASC')->get();        
        return view('empleosetting.indexempleo', compact('getempleo', 'getcounter') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleosetting.createempleo');
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
        {
            $setempleo = new Empleosetting();        
            $setempleo->user_id = auth()->id();    
            $setempleo->orden = request('orden');                
            $setempleo->label = request('label');        
            $setempleo->icono = request('icono');
            $setempleo->titulo = request('titulo');
            $setempleo->numero = request('numero');                      
            $setempleo->description = request('description');
            /* if ($request->hasFile('image')) {
                $file = $request->image;
                $file->move(public_path() . '/img/miempresa', $file->getClientOriginalName());
                $setempleo->image = $file->getClientOriginalName();
            }*/           
            $setempleo->save(); 
    
            return redirect('ajustesempleo');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleosetting  $empleosetting
     * @return \Illuminate\Http\Response
     */
    public function show(Empleosetting $empleosetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleosetting  $empleosetting
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleosetting $empleosetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleosetting  $empleosetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $setempleo = new Empleosetting;   
        $setempleo = Empleosetting::findOrFail($id);
        $setempleo->user_id = auth()->id();                   
        $setempleo->orden = request('orden'); 
        if($setempleo->label == 'contadores'){   
            $setempleo->icono = request('icono');        
            $setempleo->titulo = request('titulo');            
            $setempleo->numero = request('numero');
        }
        if($setempleo->label != 'banner'){   
        $setempleo->description = request('description');                
        }
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/miempresa', $file->getClientOriginalName());
            $setempleo->image = $file->getClientOriginalName();
        }                              
        $setempleo->update();

        return redirect('ajustesempleo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleosetting  $empleosetting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
             //
             $setempleo = Empleosetting::findOrFail($id);
             $setempleo->delete();
             return redirect('ajustesempleo');
    }
}
