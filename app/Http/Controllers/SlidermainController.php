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
     
        $slider = new Slidermain();

        $slider->user_id = auth()->id();
        $slider->name = request('name');
        $slider->description = request('description');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/slider', $file->getClientOriginalName());
            $slider->image = $file->getClientOriginalName();
        }
        $slider->fechaInicio = request('fechaInicio');
        $slider->fechaFin = request('fechaFin');
        $slider->save();
        return redirect('slidermain');
    }


}
