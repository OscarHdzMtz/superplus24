<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subjet = "informacion de contacto";
    public $contacto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        //RECIBE LOS DATOS DEL FORMULARIO
        $this->contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contactanos');
    }
}
