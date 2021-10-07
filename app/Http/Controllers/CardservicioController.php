<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardservicio;

class CardservicioController extends Controller
{
    public function index(){
        $servicios = Cardservicio::all();

        return view('Cardservicio.indexcard', compact('servicios'));
    }

    public function store(Request $request){
        $serviciosadd = new Cardservicio();
        $serviciosadd->user_id = auth()->id();
        $serviciosadd->name = request('name');
        $serviciosadd->description = request('description');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/servicios', $file->getClientOriginalName());
            $serviciosadd->image = $file->getClientOriginalName();
        }
        $serviciosadd->save();
        return redirect('cardservicio');
    }

    public function update(Request $request, $id){
        $serviciosadd = new Cardservicio();
        $serviciosadd = Cardservicio::findOrFail($id);
        $serviciosadd->user_id = auth()->id();
        $serviciosadd->name = request('name');
        $serviciosadd->description = request('description');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move(public_path() . '/img/servicios', $file->getClientOriginalName());
            $serviciosadd->image = $file->getClientOriginalName();
        }
        $serviciosadd->update();
        return redirect('cardservicio');
    }

    public function destroy($id){
        {
            $serviciosadd = Cardservicio::findOrFail($id);
            unlink(public_path('img/servicios/' . $serviciosadd->image));
            $serviciosadd->delete();
            return redirect('cardservicio');
        }
    }
}
