<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use App\Models\Landing;
use App\Models\Atencion;
use App\Models\Educacion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class LandingController extends Controller{
    public function homeTexts(){
        
        $txt=Landing::all()->toArray();       
        $textos = [
            "card1" => "Nos acompañamos en la bella tarea de vivir la vida",
            "cardt1" => "Título de la tarjeta1",
            "card2" => "Para que en la calle no sea su futuro acompáñanos a hacer la diferencia",
            "cardt2" => "Título de la tarjeta2",
            "card3" => "Niños resilientes aprendiendo a vivir, enfrentando retos en la vida",
            "cardt3" => "Título de la tarjeta3",
        ];
        return view("landing.landing-home", ["textos" => $textos, "txt" => $txt]);

        
    }

    public function nosotrosTexts(){
        $txt=Landing::all()->toArray();   
        $textos = [
            
            "patronato1" => "Información del patronato",
            "nombre1" => "Jose Perez",
            "patronato2" => "Información del patronato",
            "nombre2" => "Jose Perez",
            "patronato3" => "Información del patronato",
            "nombre3" => "Jose Perez"

        ];
        return view("landing.landing-nosotros", ["textos" => $textos, "txt" => $txt]);
        
    }
    
    public function areasTexts(){
        $atencion=Atencion::all()->toArray();
        $educacion=Educacion::all()->toArray();
        return view("landing.nosotros-area", ["atencion" => $atencion , "educacion" => $educacion]);
    }
    
    public function logroText(){
        $txt=Landing::all()->toArray();  
        return view("landing.nosotros-logros", ["txt" => $txt]);
    }
    public function contactoTexts(){
        
        $txt=Landing::all()->toArray();       
        
        return view("landing.landing-contacto", ["txt" => $txt]);

        
    }
    public function ayudaTexts(){
        
        $txt=Landing::all()->toArray();       
        return view("landing.nosotros-ayuda", ["txt" => $txt]);

        
    }
    public function donaTexts(){
        
        $txt=Landing::all()->toArray();       
        return view("landing-donaciones", ["txt" => $txt]);

        
    }
    
    public function index()
    {
        //para pasar infor directamente al index
        //$datos['donadores']=Donadores::paginate(10);

        $noticias = news::all();

        return view('landing.landing-noticias',['noticias' => $noticias]);
    }

    public function aNosotros()
    {
        //para pasar infor directamente al index
        //$datos['donadores']=Donadores::paginate(10);

        $textos = Landing::where('apartado', "=", 'aNosotros');

        return view('landing.landing-nosotros',['textos' => $textos]);
    }

    public function verNoticia($id){
        $noticia = news::find($id);
        return view('landing.ver-noticia',['noticia'=>$noticia]);
    }

    
}
