<?php

namespace App\Http\Controllers;

use App\Models\Children;
use App\Models\Donator;
use Illuminate\Http\Request;
use App\Models\Reporte;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;


class ChildrenController extends Controller
{
    public function index()
    {     
        //$children=children::ninos('');
        //$children = children::all();


        $children=DB::table('children')
                    ->select('children.id','children.nombre','children.apellido_paterno','children.apellido_materno', 'children.fecha_nacimiento', 'children.grado', DB::raw('round(AVG(reportes.calificacion),0) as promedio'))
                    ->join('reportes','reportes.child_id',"=",'children.id')
                    ->groupBy('id','nombre' , 'apellido_paterno','apellido_materno', 'fecha_nacimiento', 'grado')  

                    ->get();

  

                                
        
        return view('ninos.index',['children'=>$children]);
    }



    public function create()
    {
        //
        return view('ninos.create');
    
    }

    public function show($id)
    {
        $ninos=children::findOrFail($id);
        return view('ninos.see',compact('ninos'));
    
    }

    public function edit($id)
    {
        //
        $ninos=children::findOrFail($id);
        return view('ninos.edit',compact('ninos'));
    }

    public function destroy($id)
    {
    
        children::destroy($id);
        
        return redirect('ninos')->with('mensaje','Eliminado Exitoso');
    }

    public function update(Request $request,  $id)
    {
        //
        $datosChildren = request()->except(['_token','_method']);

        children::where('id','=',$id)->update($datosChildren);


        $donadores=children::findOrFail($id);
        
        //return view('usuario',compact('usuario'));

        return redirect('ninos')->with('mensaje','Niño editado con éxito');
    }


    public function recuperarNinos(Request $request) {
        $query = $request->search_query;
        if($request->ajax()) {
            $children = Children::ninos($query);
                return view('ninos.data.data_ninos', compact('children'))->render();
        }
    }

    public function store(Request $request)
    {


        $campos=[

                'nombre'=>'required|string|max:100',
                'apellido_paterno'=>'required|string|max:100',
                'apellido_materno'=>'required|string|max:100',
                'fecha_nacimiento'=>'required|date',
                'grado'=>'required|numeric',
                


        ];

        $mensaje=[

            'required'=>'El :attribute es requerido'

        ];

        $this->validate($request,$campos,$mensaje);



        //
        $datosNinos = request()->except('_token');
        
        //$consulta = Donadores::where('aprobado',"=",'2')->get();
        
        Children::insert($datosNinos);

        return redirect('ninos')->with('mensaje','Niño registrado con éxito');
    }




}
