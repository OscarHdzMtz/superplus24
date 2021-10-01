<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slidermain;
class SlidermainController extends Controller
{
    //
    public function index(){
        $slide = Slidermain::all();        
        return view('Slidermain.index', compact('slide'));
    }        

}
