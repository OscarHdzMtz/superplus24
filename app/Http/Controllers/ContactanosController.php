<?php

namespace App\Http\Controllers;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    //

/* ESTE CONTROLADOR SE USA PARA EL ENVIO DEL CORREO ELECTREONICO */
    public function index(){
        return view('contact');
    }

    public function store(Request $request ){
        
        $correo = new ContactanosMailable($request->all());

        Mail::to('atackevil9922@gmail.com')->send($correo);
        
        return redirect()->route('contact')->with('info', 'Informacion enviada a Superplus');
    }
}
