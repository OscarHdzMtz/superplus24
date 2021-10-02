<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slidermain;
class SlidermainController extends Controller
{
    //
    public function index(){
        $slider = Slidermain::all();        
        return view('slidermain.index', compact('slider'));
    }      
    public function create(){

    }  
    public function store(request $request){
     
        $slideradd = new Slidermain();

        $slideradd->user_id = auth()->id();
        $slideradd->name = request('name');
        $slideradd->description = request('description');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/slider', $file->getClientOriginalName());
            $slideradd->image = $file->getClientOriginalName();
        }
        $slideradd->fechaInicio = request('fechaInicio');
        $slideradd->fechaFin = request('fechaFin');
        $slideradd->save();
        return redirect('slidermain');
    }
   /*  public function edit($id)
    {        
        return view('slidermain.modaledit', ['slideradd' => Slidermain::findOrFail($id)]);
    } */

    public function update(Request $request, $id){            
        $slideradd = Slidermain::findOrFail($id);
        $slideradd->name = request('name');
        $slideradd->description = request('description');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/slider', $file->getClientOriginalName());
            $slideradd->image = $file->getClientOriginalName();
        }
        $slideradd->fechaInicio = request('fechaInicio');
        $slideradd->fechaFin = request('fechaFin');
        $slideradd->update();
        return redirect('slidermain');
    }


}
