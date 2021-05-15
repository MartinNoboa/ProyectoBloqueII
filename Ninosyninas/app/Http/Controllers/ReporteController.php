<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\Children;
use App\Models\areas;
use App\Models\Reporte;
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
        $reportes = Reporte::all();
        
        return view('reporte.index',['reportes' => $reportes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userList = users::select('id', 'nombre', 'apellido_paterno', 'apellido_materno') -> get();
        $childList = Children::select('id', 'nombre', 'apellido_paterno', 'apellido_materno') -> get();
        $areasList = areas::select('id', 'area') -> get();

    return view('reporte.create', compact('userList'), compact('childList'), compact('areasList'));
    }

    public function getNombreUsuario($id){
        $consulta = users::where('id', '=', '$id')->select('nombre', 'apellido_paterno', 'apellido_materno')->get();
        $nombreCompleto = ucfirst($this->nombre) . ' ' . ucfirst($this->apellido_paterno) . ' ' . ucfirst($this->apellido_materno);
        return $nombreCompleto;
    }

    public function getNombreNino($id){
        $consulta = Children::where('id', '=', '$id')->select('nombre', 'apellido_paterno', 'apellido_materno')->get();
        $nombreCompleto = ucfirst($this->nombre) . ' ' . ucfirst($this->apellido_paterno) . ' ' . ucfirst($this->apellido_materno);
        return $nombreCompleto;
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

            'users_id'=>'required|numeric|max:20',
            'child_id'=>'required|numeric|max:20',
            'area_id'=>'required|numeric|max:20',
            'calificacion'=>'required|integer|max:10',

    ];

    $mensaje=[

        'required'=>'El :attribute es requerido'

    ];

    $this->validate($request,$campos,$mensaje);


 
    //
    $datosReporte = request()->except('_token');

    //return response()->json($datosReporte);
    
    Reporte::insert($datosReporte);

    return redirect('reporte')->with('mensaje','Reporte registrado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reportes=Reporte::findOrFail($id);

        return view('reporte.see', compact('reportes'));


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
        $userList = users::select('id', 'nombre', 'apellido_paterno', 'apellido_materno') -> get();
        $childList = Children::select('id', 'nombre', 'apellido_paterno', 'apellido_materno') -> get();
        $areasList = areas::select('id', 'area') -> get();

        return view('reporte.edit', compact('reporte'), compact('userList'), compact('childList'));

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

}
