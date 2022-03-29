<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;


class SendEmailController extends Controller
{

    public function index()
    {

        $emailSubject = 'Envio de Ticket';
        $emailBody = 'Detalles del Ticket  KLINMEXICO';

        //usar para un solo correo de destino
        $emaifor = "adrianwebtech@gmail.com";
        //usar para varios  correos de destino

        $arrayEmails = ['dinopiza@yahoo.com.mx','adrianwebtech@gmail.com'];

        Mail::send('emails.demoMail',['msg' => $emailBody], function($message) use($emailSubject,$arrayEmails){
            $message->from("noreply@klinmexico.com","KlinMexico");
            $message->subject($emailSubject);
            $message->to($arrayEmails);
        });

    }
}
