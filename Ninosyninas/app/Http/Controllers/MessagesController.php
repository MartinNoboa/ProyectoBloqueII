<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store()
    {
        request()-> validate ([
            'nombre'=> 'required'
        ]);
        
    }
}
