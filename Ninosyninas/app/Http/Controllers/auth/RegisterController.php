<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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
            'apellido_materno'=>'required|max:255',
            'phone'=>'required|numeric',
            'birthday'=>'required|date',
            'contratacion'=>'required|date',
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed|min:6',

        ]);
        User::create([
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        return redirect()->route('lista_usuarios');
    }
}
