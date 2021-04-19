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
        return view('auth.login');
    }
    
    function check(Request $request){
        //return $request->input();
        //validar inputs del login
        $request->validate([
            'email'=>'required|email',
            'password'=>'required', //puede cambiar de acuerdo a las especificaciones de contraseña
        ]);
        
        //verificar si usuario existe en la base de datos
        //$usuario = User::where('mail','=',;
        $usuario = DB::table('users')
                ->where('mail', '=', $request->email)
                ->first();
        
        
       

        if($usuario){
            //chequear si la contraseña es correcta
            //hay que agregar hash luego
            if($request->password == $usuario->contrasenia){
                $request->session()->put('UsuarioLogeado', $usuario->id);
                return redirect('sesionIniciada');
            }else{
                return back()->with('fail','El usuario o la contraseña están incorrectos.');
            }
            
        }else{
            return back()->with('fail','El usuario o la contraseña están incorrectos.');
        }
        
    }
    
    
    function sesionIniciada(){
        return view('registrado.landing');
    }
}
