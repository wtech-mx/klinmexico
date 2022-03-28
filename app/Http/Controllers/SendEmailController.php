<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Mail\NotifyMail;


class SendEmailController extends Controller
{

    public function index()
    {


        $arrayEmails = ['adrianwebtech@gmail.com'];
        $emailSubject = 'My Subject';
        $emailBody = 'Hello, this is my message content.';

        Mail::send('emails.demoMail', ['msg' => $emailBody], function ($message) use ($arrayEmails, $emailSubject) {
            $message->to($arrayEmails)
                ->subject($emailSubject);
        });
    }
}
