<?php

namespace App\Http\Controllers;

use App\Models\Textoproducto;
use Illuminate\Http\Request;

class TextoproductoController extends Controller
{
    //
    public function index(){
        $textproduct = Textoproducto::all();
        
        return view('Textoproducto.indextexto', compact('textproduct'));
    }
    public function store(Request $request){
        $textproductadd = new Textoproducto();

        $textproductadd->user_id = auth()->id();
            $textproductadd->texto = request('texto');
            if($request->hasFile('image')) {
                $originName = $request->file('image')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileName = $fileName.'_'.time().'.'.$extension;
                $request->file('image')->move(public_path('images'), $fileName);
                $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                $url = asset('images/'.$fileName); 
                $msg = 'Image successfully uploaded'; 
                $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
                @header('Content-type: text/html; charset=utf-8'); 
                echo $response;
                @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
            }
            $textproductadd->save();
            return redirect('textoproducto');
    }
    
    public function edit($id)
    {
        return view('Textoproducto.indextexto', ['textproductadd' => Textoproducto::findOrFail($id)]);
    }

   
    public function update(){
        $textproductadd = new Textoproducto();

    }
}
