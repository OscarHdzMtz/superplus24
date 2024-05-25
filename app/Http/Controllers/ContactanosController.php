<?php

namespace App\Http\Controllers;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\PublicidadEmergente;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    //

/* ESTE CONTROLADOR SE USA PARA EL ENVIO DEL CORREO ELECTREONICO */
    public function index(){

        $utilerias = new Utilerias();
        $actualInicio = Carbon::today();
        $actualFin = Carbon::yesterday();
        $arrayPublicidadEmergente = PublicidadEmergente::OrderBy('updated_at', 'DESC')->where('fechaInicio', '<=', $actualInicio)->where('fechaFin', '>', $actualFin)->get()->toArray();        
        $URLnombrePagina = "contact";
        $idPublicidadSeleccionado = $utilerias->MostrarPublicidad($arrayPublicidadEmergente, $URLnombrePagina);        
        if ($idPublicidadSeleccionado) {
            $getPublicidadSeleccionado = PublicidadEmergente::findOrFail($idPublicidadSeleccionado);
        }else {
            $getPublicidadSeleccionado = "";
        }
        
        return view('contact', compact('getPublicidadSeleccionado'));
    }

    public function store(Request $request ){
        
        $correo = new ContactanosMailable($request->all());

        Mail::to('atackevil9922@gmail.com')->send($correo);
        
        return redirect()->route('contact')->with('info', 'Informacion enviada a Superplus');
    }
}
