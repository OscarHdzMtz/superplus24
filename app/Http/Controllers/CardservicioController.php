<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardservicio;
use Illuminate\Support\Facades\File;

class CardservicioController extends Controller
{
    public function index()
    {
        $servicios = Cardservicio::all();
        return view('Cardservicio.indexcard', compact('servicios'));
    }

    public function store(Request $request)
    {
        $serviciosadd = new Cardservicio();
        $serviciosadd->user_id = auth()->id();
        $serviciosadd->name = request('name');
        $serviciosadd->description = request('description');

        if ($request->hasFile('image')) {
            $serviciosadd->image = Utilerias::optimizeAndSaveImage($request->file('image'), 'img/servicios');
        }

        if ($request->hasFile('imghover')) {
            $serviciosadd->imghover = Utilerias::optimizeAndSaveImage($request->file('imghover'), 'img/servicios');
        }

        $serviciosadd->status = request('status') ? 1 : 0;
        $serviciosadd->save();

        return redirect('cardservicio');
    }

    public function update(Request $request, $id)
    {
        $serviciosadd = Cardservicio::findOrFail($id);
        $serviciosadd->user_id = auth()->id();
        $serviciosadd->name = request('name');
        $serviciosadd->description = request('description');

        if ($request->hasFile('image')) {
            $serviciosadd->image = Utilerias::optimizeAndSaveImage($request->file('image'), 'img/servicios');
        }

        if ($request->hasFile('imghover')) {
            $serviciosadd->imghover = Utilerias::optimizeAndSaveImage($request->file('imghover'), 'img/servicios');
        }

        $serviciosadd->status = request('status') ? 1 : 0;
        $serviciosadd->update();

        return redirect('cardservicio');
    }

    public function destroy($id)
    {
        $serviciosadd = Cardservicio::findOrFail($id);
        
        if ($serviciosadd->image && File::exists(public_path('img/servicios/' . $serviciosadd->image))) {
            File::delete(public_path('img/servicios/' . $serviciosadd->image));
        }

        if ($serviciosadd->imghover && File::exists(public_path('img/servicios/' . $serviciosadd->imghover))) {
            File::delete(public_path('img/servicios/' . $serviciosadd->imghover));
        }

        $serviciosadd->delete();
        return redirect('cardservicio');
    }
}
