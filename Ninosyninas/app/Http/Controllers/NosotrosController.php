<?php

namespace App\Http\Controllers;

use App\Models\Patronato;
use App\Models\Atencion;
use App\Models\Educacion;
use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patronato=Patronato::paginate(10);
        return view('patronato.index',['patronato'=>$patronato]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexat()
    {
        $atencion=Atencion::paginate(10);
        return view('atencion.index',['atencion'=>$atencion]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexed()
    {
        $educacion=Educacion::paginate(10);
        return view('educacion.index',['educacion'=>$educacion]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        Patronato::destroy($id);
        return redirect('patronato')->with('mensaje','Eliminado Exitoso');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminarat(Request $request,$id)
    {
        /*
        Atencion::destroy($id);
        return redirect('atencion')->with('mensaje','Eliminado Exitoso');
        */
        return $request->id + $id;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminaredu($id)
    {
        Educacion::destroy($id);
        return redirect('educacion')->with('mensaje','Eliminado Exitoso');
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patronato.create');
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
                    'informacion'=>'required|string|max:300',
                ];

                $mensaje=[

                    'required'=>'El :attribute es requerido'

                ];

            $this->validate($request,$campos,$mensaje);
            $datosPatronato = request()->except('_token');
            Patronato::insert( $datosPatronato);
            return redirect('patronato')->with('mensaje','Vocal registrado con éxito');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createarea()
    {
        return view('atencion.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storearea(Request $request)
    {
        
                $campos=[

                    'contenido'=>'required|string|max:100',
                ];

                $mensaje=[

                    'required'=>'El :attribute es requerido'

                ];

            $this->validate($request,$campos,$mensaje);
            $datosAtencion = request()->except('_token');
            Atencion::insert( $datosAtencion);
            return redirect('atencion')->with('mensaje','Área de atención registrada con éxito');
     }
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createedu()
    {
        return view('educacion.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeedu(Request $request)
    {
        
                $campos=[

                    'contenido'=>'required|string|max:100',
                ];

                $mensaje=[

                    'required'=>'El :attribute es requerido'

                ];

            $this->validate($request,$campos,$mensaje);
            $datosEducacion= request()->except('_token');
            Educacion::insert( $datosEducacion);
            return redirect('educacion')->with('mensaje','Programa de educación registrado con éxito');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
