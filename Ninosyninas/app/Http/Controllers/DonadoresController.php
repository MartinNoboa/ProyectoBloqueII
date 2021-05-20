<?php

namespace App\Http\Controllers;

use App\Models\Donadores;
use Illuminate\Http\Request;





class DonadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function eloquent(){


        //$consulta = Donadores::where('nombre')->get();

        $consulta = Donadores::where('aprobado',"=",'2')->get();

        //$aprobados = Donadores::all();

        //return view('',['consulta' => $consulta]);

        //return $consulta;


    }

    public function index()
    {
        //para pasar infor directamente al index
        //$datos['donadores']=Donadores::paginate(10);
        $aprobados = Donadores::donadoresAprobados('');
        $desaprobados = Donadores::donadoresNoAprobados('');
        return view('donadores.index',['desaprobados' => $desaprobados,'aprobados' => $aprobados]);
    }

    public function recuperarDonadoresAprobados(Request $request) {
        $query = $request->search_query;
        if($request->ajax()) {
            $donadores = Donadores::donadoresAprobados($query);
                return view('donadores.index', compact('donadores'))->render();
        }
    }

    public function recuperarDonadoresNoAprobados(Request $request) {
        $query = $request->search_query;
        if($request->ajax()) {
            $donadores = Donadores::donadoresNoAprobados($query);
                return view('donadores.index', compact('donadores'))->render();
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('donadores.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $campos=[

                'nombre'=>'required|string|max:100',
                'apellido_paterno'=>'required|string|max:100',
                'apellido_materno'=>'required|string|max:100',
                'email'=>'required|email',
                'telefono'=>'required|numeric',
                'calle_principal'=>'required|string|max:100',
                'codigo_postal'=>'required|numeric',
                'colonia'=>'required|string|max:100',
                'ciudad'=>'required|string|max:100',
                'estado'=>'required|string|max:100',
                'tipo_pago'=>'required|string|max:100',


        ];

        $mensaje=[

            'required'=>'El :attribute es requerido'

        ];

        $this->validate($request,$campos,$mensaje);



        //
        $datosDonadores = request()->except('_token');
        
        //$consulta = Donadores::where('aprobado',"=",'2')->get();
        
        Donadores::insert($datosDonadores);

        return redirect('donadores')->with('mensaje','Donador registrado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donadores  $donadores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donadores=Donadores::findOrFail($id);
        return view('donadores.see',compact('donadores'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donadores  $donadores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $donadores=Donadores::findOrFail($id);
        return view('donadores.edit',compact('donadores'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donadores  $donadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $datosDonadores = request()->except(['_token','_method']);
        Donadores::where('id','=',$id)->update($datosDonadores);

        $donadores=Donadores::findOrFail($id);
        
        //return view('usuario',compact('usuario'));

        return redirect('donadores')->with('mensaje','Donador editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donadores  $donadores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Donadores::destroy($id);

        //return redirect('/donadores');

        return redirect('donadores')->with('mensaje','Eliminado Exitoso');
        
    }
  
}
