<?php

namespace App\Http\Controllers;


use App\Models\users;
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
        $users=users::usuarios('');
        return view('usuario.index')->with('users',$users);
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
        //
        
        users::destroy($id);

        return redirect('usuario')->with('mensaje','Eliminado Exitoso');
        
    }

    public function getMoreUsers(Request $request) {
        $query = $request->search_query;
        if($request->ajax()) {
            $users = users::getUsers($query);
                return view('usuario.data.data_usuario', compact('users'))->render();
        }
    }

    public function search(Request $request){
        if ($request->ajax()) {
            $output='';
            $query = $request->get('query');
            if($query != ''){
                $data = DB::table('users')
                        ->where('nombre','like','%'.$query.'%')
                        ->orWhere('apellido_paterno','like','%'.$query.'%')
                        ->orWhere('apellido_materno','like','%'.$query.'%')
                        ->get(); 

            }
            else{
                $data = DB::table('users')
                        ->orderBy('id','desc')
                        ->get();

            }
            $num_rows = $data->count();
            if ($num_rows>0) {
                foreach($data as $user){
                    $output .='
                    <tr>
                    <td>'.$user->nombre.'</td>
                    <td>'.$user->apellido_paterno.'</td>
                    <td>'.$user->apellido_materno.'</td>
                    <td>'.$user->fecha_nacimiento.'</td>
                    <td>'.$user->fecha_inicio.'</td>
                    <td>'.$user->ocupacion.'</td>
                    <td>'.$user->telefono.'</td>
                    <td>'.$user->mail.'</td>
                    </tr>
                    ';
                }
            }
            else{
                $output .='
                <tr>
                <td class=""> No se encontro usuario</td>
            
                </tr>
                ';
            }
        }
    }
}
