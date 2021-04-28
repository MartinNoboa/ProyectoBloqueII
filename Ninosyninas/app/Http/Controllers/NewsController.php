<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }
    public function showForm()
    {
        return view('news.registrar-noticia');
    }
    public function upload_image(Request $request)
    {
        $this->validate($request,[
            'titulo'=>'required|MAX:255',
            'contenido'=>'required',
            'image'=>'nullable|image',
        ]);
        

        $last_id=DB::table('images')
        ->select('id')
        ->orderBy('id','desc')
        ->first();
        
        $amount = images::all();
        
        if ($amount->isEmpty()) {//la tabla esta vacia
            $name='imgNews1.jpg';
            if ($request->hasFile('image')) {//tiene una imagen
                images::create([
                    'nombre'=>$name,
                    'url'=>'',
                ]);
                news::create([
                    'titulo'=>$request->titulo,
                    'contenido'=>$request->contenido,
                    'image_id'=>1,
                ]);
                
                $request->image->storeAs('img',$name,'public');
            }
            else{//no se cargo ninguna imagen
                news::create([
                    'titulo'=>$request->titulo,
                    'contenido'=>$request->contenido,
                ]);
            } 
        }
        else{//la tabla no esta vacia
            $last_id=$last_id->id;
            $last_id+=1;
            $name='imgNews'.$last_id.'.jpg';
            if ($request->hasFile('image')) {
                images::create([
                    'nombre'=>$name,
                    'url'=>'',
                ]);
                news::create([
                    'titulo'=>$request->titulo,
                    'contenido'=>$request->contenido,
                    'image_id'=>$last_id,
                ]);
                
                $request->image->storeAs('img',$name,'public');
            }
            else{
                news::create([
                    'titulo'=>$request->titulo,
                    'contenido'=>$request->contenido,
                ]);
            } 
        }
        
        
        return redirect()->route('news');
    }

}
