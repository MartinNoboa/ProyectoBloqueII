<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use App\Mail\TestMail;
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

        /*
       Mail::to('ogva27@hotmail.com')->queue(new MessageReceived($message));
       */
        Mail::to('ninosyninasdemexico@gmail.com')->queue(new TestMail($message));
        Mail::to('ninosyninasdemexico@yahoo.com')->queue(new TestMail($message));

        //return 'mensaje enviado'; //new MessageReceived($message);
        return redirect('contactanos')->with('mensaje','Mensaje enviado con éxito');

    }


}
