<?php

namespace App\Http\Controllers\auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


//clase para hashear contraseñas
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
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
    * Funcion para validar datos de inicio de sesion
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
        
        //Metodo manual, funciona pero necesitamos que regrese $user en la sesion
        
        //verificar si usuario existe en la base de datos
        if($usuario){
            //chequear si la contraseña es correcta
            //hay que agregar hash luego
            //if(Auth::check($pass, $usuario->contrasenia)){
            if($usuario->mail == $request->email && $usuario->contrasenia == $request->password){
            //if(Auth::attempt($credenciales)){
                $request->session()->put('sesionUsuario', $usuario->id);
                return redirect()->intended('panel');
            }else{
                return back()->with('fail','El usuario o la contraseña están incorrectos.');
            }
        }else{
            return back()->with('fail','El usuario o la contraseña están incorrectos.');
        }

        
        
    }
    
    
    function panel(){
        dd(auth()->user());
        return view('registrado.panel');

    }
    
    function logout(){
        if(session()->has('sesionUsuario')){
            session()->pull('sesionUsuario');
            return redirect('login');
        }
    }

    function getRole(){
        $role = DB::table("roles_users")
        ->where($this->id ,'=','role_users.id');
        return $role;
    }
}
