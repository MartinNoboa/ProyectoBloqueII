<?php

namespace App\Http\Controllers;


use App\Models\users;
use App\Models\roles;
use App\Models\roles_users;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    
    public function index()
    {
        //return view('usuario.index');ajax busqueda es solo esta linea
        //return view('usuario.index',['users'=>$users,]);
        
        /*recibe la busqueda parcial de un usuario, al cargar la pagina no tiene busqueda parcial 
        * por eso recibe un espacio vacio
        */        
        /* $users=users::usuarios('');
        return view('usuario.index')->with('users',$users); */
        $users = users::all();
        
        return view('usuario.index',['users' => $users]);

    }


    public function create()
    {
        $rolesList = roles::select('id', 'rol') -> get();
        return view('usuario.create', compact('rolesList'));
    }

    public function store(Request $request)
    {
        
        $campos = [
            'nombre'=>'required|max:255',
            'apellido_paterno'=>'required|max:255',
            'apellido_materno'=>'max:255',
            'fecha_nacimiento'=>'required|date',
            'fecha_inicio'=>'required|date',
            'ocupacion'=>'required|max:255',
            'telefono'=>'required|numeric',
            'mail'=>'required|email|unique:users,mail',
            'contrasenia'=>'required|confirmed|min:6',
            'roles_id'=>'required|numeric'

        ];

        $mensaje=[

            'required'=>'El :attribute es requerido'
    
        ];
        
        $this->validate($request, $campos, $mensaje);
    
        $datosUsuario = request()->except('roles_id','_token', 'contrasenia_confirmation');

        $rol = request('roles_id');

        //return response()->json($datosUsuario);
    
        $user = users::insertGetId($datosUsuario);

        roles_users::insert(['role_id' => $rol, 'user_id' => $user, 'activo' => 1]);

       return redirect('usuario')->with('mensaje','Usuario registrado con éxito');
    }

    public function show($id){

        $rolesList = roles::select('id', 'rol') -> get();
        $usuario = users::findOrFail($id);
        $rolUsuario = roles_users::where('user_id', $id) -> select('role_id') -> first();

        return view('usuario.see', compact('usuario','rolesList', 'rolUsuario'));
    }

    public function edit($id)
    {
        
        $usuario=users::findOrFail($id);
        $rolesList = roles::select('id', 'rol') -> get();
        $rolUsuario = roles_users::where('user_id', '=', $id) -> select('role_id') -> first();
        
        return view('usuario.edit',compact('usuario', 'rolesList', 'rolUsuario'));


        
    }

    public function update(Request $request, $id)
    {
        $datosUsuario = request()->except(['roles_id', '_token', 'contrasenia_confirmation', '_method']);
        users::where('id','=',$id)->update($datosUsuario);

        $usuario=users::findOrFail($id);

        $rol = request('roles_id');
        $rolUsuario = roles_users::where('user_id', '=', $id) -> update(['role_id' => $rol]);
        
        return redirect('usuario')->with('mensaje','Usuario editado con éxito');

    }

    public function destroy($id)
    {
        users::destroy($id);
        return redirect('usuario')->with('mensaje','Usuario eliminado exitosamente');
    }

    public function recuperarUsuarios(Request $request) {
        $query = $request->search_query;
        if($request->ajax()) {
            $users = users::usuarios($query);
                return view('usuario.data.data_usuario', compact('users'))->render();
        }
    }

    
}
