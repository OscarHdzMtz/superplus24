<?php

namespace App\Http\Controllers;

use App\Models\Indexsetting;
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
        $setting = Indexsetting::Orderby('orden', 'ASC')->get();
        $getimagen = Indexsetting::Orderby('orden', 'ASC')->where('label','imagenfooter')->get();
        $gettitulo = Indexsetting::Orderby('orden', 'ASC')->where('label' , '!=', 'tarjeta')
                                    ->where('label', '!=', 'imagenfooter')->get();
        return view('indexsetting.index', compact('setting', 'gettitulo', 'getimagen'));
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
        $addsetting = new Indexsetting();
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
     * @param  \App\Models\Indexsetting  $indexsetting
     * @return \Illuminate\Http\Response
     */
    public function show(Indexsetting $indexsetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Indexsetting  $indexsetting
     * @return \Illuminate\Http\Response
     */
    public function edit(Indexsetting $indexsetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Indexsetting  $indexsetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $addsetting = Indexsetting::findOrFail($id);     
        /* $addsetting->label = request('label'); */
        $addsetting->orden = request('orden');            
        $addsetting->titulo = request('titulo');
        $addsetting->style = request('style');
        if($addsetting->label != 'imagenfooter'){  
            $addsetting->description = request('description');
        }          
        if($addsetting->label == 'tarjeta'){            
            $addsetting->icono = request('icono');
            $addsetting->titulobtn = request('titulobtn');
            $addsetting->redireccion = request('redireccion');
            $addsetting->modal = request('modal') ? 1 : 0;
        }               
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/imagenfooter', $file->getClientOriginalName());
            $addsetting->image = $file->getClientOriginalName();
        } 
        $addsetting->update();
        return redirect('configuracion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Indexsetting  $indexsetting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $addsetting = Indexsetting::findOrFail($id);
        $addsetting->delete();
        return redirect('configuracion');
    }
}
