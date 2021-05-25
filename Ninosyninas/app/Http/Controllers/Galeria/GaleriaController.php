<?php

namespace App\Http\Controllers\Galeria;

use App\Models\galleries;
use App\Models\images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class GaleriaController extends Controller
{
    public function index()
    {
        $galleries=galleries::get();
        return view('galeria.index',[
            'galleries'=>$galleries,
        ]);
    }
    public function displayForm()
    {
        return view('galeria.publicar-imagen');
    }
    public function publicarForm(Request $request)
    {
        $this->validate($request,[
            // 'titulo'=>'required|MAX:255',
            'evento'=>'required',
            'comentario'=>'required',
            'image'=>'required|nullable|image',
        ]);
        $last_id=DB::table('images')
        ->select('id')
        ->orderBy('id','desc')
        ->first();
        
        $amount = images::all();
        if ($amount->isEmpty()) {//la tabla esta vacia
            $name='imgGaleria1.jpg';
            if ($request->hasFile('image')) {//tiene una imagen
                images::create([
                    'nombre'=>$name,
                    'url'=>'storage/img/imgGaleria1.jpg',
                ]);
                galleries::create([
                    'evento'=>$request->evento,
                    'comentario'=>$request->comentario,
                    'image_id'=>1,
                ]);
                
                $request->image->storeAs('img',$name,'public');
            }
            else{//no se cargo ninguna imagen
                galleries::create([
                    'evento'=>$request->evento,
                    'comentario'=>$request->comentario,
                ]);
            } 
        }
        else{//la tabla no esta vacia
            $last_id=$last_id->id;
            $last_id+=1;
            $name='imgGaleria'.$last_id.'.jpg';
            if ($request->hasFile('image')) {
                images::create([
                    'nombre'=>$name,
                    'url'=>'storage/img/'.$name,
                ]);
                galleries::create([
                    'evento'=>$request->evento,
                    'comentario'=>$request->comentario,
                    'image_id'=>$last_id,
                ]);
                
                $request->image->storeAs('img',$name,'public');
            }
            else{
                galleries::create([
                    'titulo'=>$request->titulo,
                    'comentario'=>$request->comentario,
                ]);
            } 
        }
        return redirect()->route('galeria-panel');
    }
    public function delete($id)
    {
        $img_=galleries::find($id);
        $str_Storage=$img_->url;
        $str_Storage=str_replace('storage/','',$img_->url);
        Storage::disk('public')->delete($str_Storage);
        galleries::destroy($id);
        images::destroy($img_->image_id);

        return back();
    }
}
