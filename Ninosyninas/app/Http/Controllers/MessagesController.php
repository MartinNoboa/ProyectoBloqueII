<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;



class MessagesController extends Controller
{
    public function store()
    {
        $message= request()-> validate ([
            'nombre'=> 'required',
            'email'=> ['required','email'],
            'mensaje'=> 'required',
            'tema'=> 'required'
        ]);

       Mail::to('ogva27@hotmail.com')->queue(new MessageReceived($message));

        return 'mensaje enviado'; //new MessageReceived($message);

    }


}
