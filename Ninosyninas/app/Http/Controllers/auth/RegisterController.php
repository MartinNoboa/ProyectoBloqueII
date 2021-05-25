<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.registrar-usuario');
    }
    public function store(Request $request){
        
        $campos = [
            'name'=>'required|max:255',
            'apellido_paterno'=>'required|max:255',
            'apellido_materno'=>'max:255',
            'birthday'=>'required|date',
            'contratacion'=>'required|date',
            'ocupacion'=>'required|max:255',
            'phone'=>'required|numeric',
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed|min:6',
            'role'=>'required|numeric'

        ];

        $mensaje=[

            'required'=>'El :attribute es requerido'
    
        ];
        
        $this->validate($request, $campos, $mensaje);

        $datosUsuario = request()->except('_token', 'role');

        users::insert($datosUsuario);

        return response()->json($datosUsuario);

        //return redirect('usuarios')->with('mensaje','Usuario registrado con éxito');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donadores  $donadores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario=users::findOrFail($id);
        return view('usuario.see',compact('usuario'));
    }
}
