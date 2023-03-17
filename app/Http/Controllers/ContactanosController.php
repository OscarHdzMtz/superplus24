<?php

namespace App\Http\Controllers;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\PublicidadEmergente;

use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    //

/* ESTE CONTROLADOR SE USA PARA EL ENVIO DEL CORREO ELECTREONICO */
    public function index(){

        $utilerias = new Utilerias();
        $arrayPublicidadEmergente = PublicidadEmergente::all()->toArray();    
        $URLnombrePagina = "contact";
        $nombreImagenPublicidadEmergente = $utilerias->MostrarPublicidad($arrayPublicidadEmergente, $URLnombrePagina); 
        
        return view('contact', compact('nombreImagenPublicidadEmergente'));
    }

    public function store(Request $request ){
        
        $correo = new ContactanosMailable($request->all());

        Mail::to('atackevil9922@gmail.com')->send($correo);
        
        return redirect()->route('contact')->with('info', 'Informacion enviada a Superplus');
    }
}
