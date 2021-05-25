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
        $reportes = Reporte::paginate(5);
        
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

    return view('reporte.create', compact('userList', 'childList', 'areasList'));
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

            'users_id'=>'required|numeric',
            'child_id'=>'required|numeric',
            'area_id'=>'required|numeric',
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
        $reporte = Reporte::findOrFail($id);
        $userList = users::select('id', 'nombre', 'apellido_paterno', 'apellido_materno') -> get();
        $childList = Children::select('id', 'nombre', 'apellido_paterno', 'apellido_materno') -> get();
        $areasList = areas::select('id', 'area') -> get();

        return view('reporte.see', compact('reporte', 'userList', 'childList', 'areasList'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reporte = Reporte::findOrFail($id);
        $userList = users::select('id', 'nombre', 'apellido_paterno', 'apellido_materno') -> get();
        $childList = Children::select('id', 'nombre', 'apellido_paterno', 'apellido_materno') -> get();
        $areasList = areas::select('id', 'area') -> get();

        return view('reporte.edit', compact('reporte', 'userList', 'childList', 'areasList'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosReportes = request()->except(['_token','_method']);
        Reporte::where('id','=',$id)->update($datosReportes);

        $reportes=Reporte::findOrFail($id);
        
        //return view('usuario',compact('usuario'));

        return redirect('reporte')->with('mensaje','Reporte editado con éxito');
    }

    public function destroy($id)
    {
        
        Reporte::destroy($id);

        return redirect('reporte')->with('mensaje','Eliminado Exitoso');
    }

}
