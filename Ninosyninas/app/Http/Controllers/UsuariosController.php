<?php

namespace App\Http\Controllers;


use App\Models\users;
use App\Models\roles;
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
            'mail'=>'required|email|max:255',
            'contrasenia'=>'required|confirmed|min:6',
            'roles_id'=>'required|numeric'

        ];

        $mensaje=[

            'required'=>'El :attribute es requerido'
    
        ];
        
        $this->validate($request, $campos, $mensaje);

        


 
    //
        $datosUsuario = request()->except('roles_id','_token');

        //$rol = request('roles_id');

        return response()->json($datosUsuario);
    
        //users::insert($datosUsuario);

       // return redirect('usuario')->with('mensaje','Usuario registrado con éxito');
    }

   

    public function edit($id)
    {
        
        $v_user=users::findOrFail($id);
        
        return view('usuario.edit',compact('v_user'));


        
    }

    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'name'=>'required|max:255',
            'apellido_paterno'=>'required|max:255',
            'apellido_materno'=>'max:255',
            'birthday'=>'required|date',
            'contratacion'=>'required|date',
            'ocupacion'=>'required|max:255',
            'phone'=>'required|numeric',
            'email'=>'required|email|max:255',
        ]);
        $input = $request->all();
        $usr = users::find($id);
        $usr->nombre = $input['name'];
        $usr->apellido_paterno = $input['apellido_paterno'];
        $usr->apellido_materno = $input['apellido_materno'];
        $usr->fecha_nacimiento = $input['birthday'];
        $usr->fecha_inicio = $input['contratacion'];
        $usr->ocupacion = $input['ocupacion'];
        $usr->telefono = $input['phone'];
        $usr->mail = $input['email'];
        
        $usr->save();


        return redirect()->route('lista_usuarios')->with('mensaje','Usuario editado con éxito');

    }

    public function destroy($id)
    {
        users::destroy($id);
        return redirect('usuario')->with('mensaje','Eliminado Exitoso');
    }

    public function recuperarUsuarios(Request $request) {
        $query = $request->search_query;
        if($request->ajax()) {
            $users = users::usuarios($query);
                return view('usuario.data.data_usuario', compact('users'))->render();
        }
    }

    
}
