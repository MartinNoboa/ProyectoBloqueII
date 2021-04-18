<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['usuarios']=usuarios::paginate(5);
        return view('usuario.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Esta madre anda marcando un error pero si los registra()
        /*
        $campos=[

            'Nombre'=> 'required|string|max:100',
            'ApellidoMaterno'=> 'required|string|max:100',
            'ApellidoPaterno'=> 'required|string|max:100',
            'Telefono'=> 'required|char|max:15',
            'FechaContratacion'=> 'required|date',
            'FechaNacimiento'=> 'required|date'


        ];

        $mensaje=[


            'required'=>'El :attribute es requerido '


        ];


        $this->validate($request,$campos,$mensaje);

        */
        $datosUsuario = request()->except('_token');
        //$datosUsuario = request()->all();
        
        usuarios::insert($datosUsuario);

        return redirect('usuario')->with('mensaje','Usuario registrado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $usuario=usuarios::findOrFail($id);
        return view('usuario.edit',compact('usuario'));



        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
     
          $campos=[

            'Nombre'=> 'required|string|max:100',
            'ApellidoMaterno'=> 'required|string|max:100',
            'ApellidoPaterno'=> 'required|string|max:100',
            'Telefono'=> 'required|string|max:15',
            'FechaContratacion'=> 'required|date',
            'FechaNacimiento'=> 'required|date'


        ];

        $mensaje=[


            'required'=>'Llena todos los atributos '


        ];

        $this->validate($request,$campos,$mensaje);
        
        $datosUsuario = request()->except(['_token','_method']);
        usuarios::where('id','=',$id)->update($datosUsuario);

        $usuario=Usuarios::findOrFail($id);
        
        //return view('usuario',compact('usuario'));

        return redirect('usuario')->with('mensaje','Usuario editado con éxito');
        
      


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        usuarios::destroy($id);

        return redirect('usuario');
        
    }
}
