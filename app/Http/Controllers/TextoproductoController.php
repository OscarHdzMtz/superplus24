<?php

namespace App\Http\Controllers;

use App\Models\Textoproducto;
use Faker\Provider\ar_JO\Text;
use Illuminate\Http\Request;

class TextoproductoController extends Controller
{
    //
    public function index(){
        $textproduct = Textoproducto::all();

        return view('Textoproducto.indextexto', compact('textproduct'));
    }
    public function store(){
        $textproductadd = new Textoproducto();

        $textproductadd->user_id = auth()->id();
            $textproductadd->texto = request('texto');      
            $textproductadd->save();
            return redirect('textoproducto');
    }
   
    public function update(Request $request, $id){
        $textproductadd = Textoproducto::findOrFail($id);
        
        $textproductadd->texto = request('texto');      
        $textproductadd->update();
        return redirect('textoproducto');
    }

    public function destroy($id){
        $textproductadd = Textoproducto::findOrFail($id);        
        $textproductadd->delete();
        return redirect('textoproducto');
    }
}
