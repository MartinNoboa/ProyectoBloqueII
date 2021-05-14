<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /* $usuarios = [
            "1" -> User::findOrFail('id'),
            "2" -> users::findOrFail('nombre'),
            "3" -> users::findOrFail('apellido_paterno'),
            "4" -> users::findOrFail('apellido_materno')];*/

        return view('reporte.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $reportes=Reporte::all();

        return view('reporte.ver-reporte', ['reportes' => $reportes]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reporte=Reporte::findOrFail($id);

        return view('reporte.edit-reporte', compact('reporte'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporte $reporte)
    {
        //
    }

    public function delete($id)
    {
        $reporte=Reporte::find($id);
        Reporte::destroy($id);

        return back();
    }

    public function getNombreUsuario(){
        $nombre = users::get('nombre');
        $aPaterno = users::get('apellido_paterno');
        $aMaterno = users::get('apellido_materno');

        $response = $nombre + $aPaterno + $aMaterno;

        return $response;

    }

    public function verReporte(){
        return view("reporte.index");
    }
}
