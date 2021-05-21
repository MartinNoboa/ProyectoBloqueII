<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use Illuminate\Http\Request;

class ContenidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('content.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contenido = Contenido::findOrFail($id);
        return view('content.edit', compact('contenido'));

        //return view('content.edit');
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
       
        $datosContenido = request()->except(['_token','_method']);
        Contenido::where('id','=',$id)->update($datosContenido);        
        //return view('usuario',compact('usuario'));
        return redirect('contenido')->with('mensaje','Contenido editado con éxito');
    }

}
