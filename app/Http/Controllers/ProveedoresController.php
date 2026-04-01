<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProveedoresController extends Controller
{
    public function index()
    {
        $proveedores['proveedores'] = Proveedores::all();
        return view('proveedores.index', $proveedores);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image'
        ]);

        $proveedore = new Proveedores();
        $proveedore->user_id = auth()->id();
        $proveedore->name = request('name');

        if ($request->hasFile('image')) {
            $proveedore->image = Utilerias::optimizeAndSaveImage($request->file('image'), 'img/proveedore');
        }

        $proveedore->save();
        return redirect('proveedores');
    }

    public function edit($id)
    {
        return view('proveedores.edit', ['proveedore' => Proveedores::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $proveedore = Proveedores::findOrFail($id);
        $proveedore->name = request('name');

        if ($request->hasFile('image')) {
            $proveedore->image = Utilerias::optimizeAndSaveImage($request->file('image'), 'img/proveedore');
        }

        $proveedore->update();
        return redirect('proveedores');
    }

    public function destroy($id)
    {
        $proveedore = Proveedores::findOrFail($id);
        if ($proveedore->image && File::exists(public_path('img/proveedore/' . $proveedore->image))) {
            File::delete(public_path('img/proveedore/' . $proveedore->image));
        }
        $proveedore->delete();
        return redirect('proveedores');
    }
}
