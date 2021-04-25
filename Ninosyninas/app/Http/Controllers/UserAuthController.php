<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//clase para hashear contraseñas
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserAuthController extends Controller
{   
    
    /*
    * Funcion para manejar el login
    */
    function login(){
        return view("auth.login");
    }
    
    
    /*
    * Funcion para 
    */
    function check(Request $request){
        //return $request->input();
        //validar inputs del login
        $request->validate([
            'email'=>'required|email',
            'password'=>'required', //puede cambiar de acuerdo a las especificaciones de contraseña
        ]);
        
        //recuperar mail y contraseña
        $usuario = DB::table('users')
                ->where('mail', '=', $request->email)
                ->first();
        
        //verificar si usuario existe en la base de datos
        if($usuario){
            //chequear si la contraseña es correcta
            //hay que agregar hash luego
            if($request->password == $usuario->contrasenia){
                $request->session()->put('sesionUsuario', $usuario->id);
                return redirect('panel');
            }else{
                return back()->with('fail','El usuario o la contraseña están incorrectos.');
            }
            
        }else{
            return back()->with('fail','El usuario o la contraseña están incorrectos.');
        }
        
    }
    
    
    function panel(){
        return view('registrado.panel');
    }
    
    function logout(){
        if(session()->has('sesionUsuario')){
            session()->pull('sesionUsuario');
            return redirect('login');
        }
    }
}
