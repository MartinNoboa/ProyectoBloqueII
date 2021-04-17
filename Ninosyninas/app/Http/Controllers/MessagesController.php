<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

//use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store()
    {
        request()-> validate ([
            'nombre'=> 'required',
            'email'=> ['required','email'],
            'mensaje'=> 'required',
            'tema'=> 'required'
        ]);

        Mail::to('ogva27@hotmail.com')->send(new MessageReceived);

        return 'Mensaje enviado';

    }


}
