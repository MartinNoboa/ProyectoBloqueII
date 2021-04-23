<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.registrar-usuario');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|max:255',
            'apellido_paterno'=>'required|max:255',
            'apellido_materno'=>'max:255',
            'birthday'=>'required|date',
            'contratacion'=>'required|date',
            'ocupacion'=>'required|max:255',
            'phone'=>'required|numeric',
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed|min:6',

        ]);
        users::create([
            'nombre'=>$request->name,
            'apellido_paterno'=>$request->apellido_paterno, 
            'apellido_materno'=>$request->apellido_materno,
            'fecha_nacimiento'=>$request->birthday,
            'fecha_inicio'=>$request->contratacion,
            'ocupacion'=>$request->ocupacion,
            'telefono'=>$request->phone,
            'mail'=>$request->email,
            'contrasenia'=>Hash::make($request->password),
        ]);
        return redirect()->route('lista_usuarios');
    }
}
