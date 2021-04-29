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
        // $pp=news::find(1)->images()->first()->url;
        // dd($pp);
        $news=news::paginate(10);
        return view('news.index',[
            'news'=>$news,
        ]);
    }
    public function showForm()
    {
        return view('news.registrar-noticia');
    }
    public function edit($id)
    {
        
        $v_news=news::findOrFail($id);
        
        return view('news.edit',compact('v_news'));
   
    }
    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'titulo'=>'required|MAX:255',
            'contenido'=>'required',
        ]);
        $input = $request->all();
        $news = news::find($id);
        $news->titulo = $input['titulo'];
        $news->contenido = $input['contenido'];
        $news->save();


        return redirect()->route('news');

    }
    public function upload_image(Request $request)
    {
        $this->validate($request,[
            'titulo'=>'required|MAX:255',
            'contenido'=>'required',
            'image'=>'required|nullable|image',
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
                    'url'=>'storage/img/imgNews1.jpg',
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
                    'url'=>'storage/img/'.$name,
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
