<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use App\Models\Landing;
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
            "aNosotros" => "Somos un grupo de personas comprometidas con mejorar las condiciones de marginación en que viven 
            muchos niños y sus familias al hacer de la calle su lugar de trabajo. La calle es un medio agresivo
            y marca de manera importante el desarrollo de los niños que se ven obligados a pasar gran parte del 
             día en ella. La invitación al consumo de drogas, la exposición a riesgos de carácter sexual, la
             ignorancia y la temprana deserción escolar, hacen de este grupo de menores una población altamente 
            vulnerable.
            Comenzamos como voluntarios participando en un estudio llamado “100 Ciudades“ coordinado por UNICEF 
            Y La OIT, lo que nos motivó para hacer un 'CENTRO DE ATENCIÓN DE DÍA', desarrollamos nuestra labor desde
            1998. Somos una Asociación Civil legalmente constituida y somos una donataria autorizada para expedir 
            recibos deducibles de impuestos. Nos organizamos a través de un patronato, cuya tarea es velar 
            por el buen funcionamiento de la institución.",

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
            
        $areas = [
            "1" => "Alimentación.",
            "2" => "Asesorías y acompañamiento.",
            "3" => "Salud.",
            "4" => "Desarrollo Humano."   
        ];

        $programas = [
            "1" => "Programa de Estimulación Psicopedagógica",
            "2" => "Programa de Integración, Desarrollo Humano.",
            "3" => "Programa de formación preescolar.",
            "4" => "Ayúdame a estudiar. Apoyo académico, apoyo con tareas etc. a niños escolarizados",
            "5" => "Programa 10-14 para niños desertores de la escuela.",
            "6" => "Alfabetización y educación básica para niños no escolarizados",
            "7" => "Taller de computación.",
            "8" => "Actividades de verano."

        ];
    
        return view("landing.nosotros-area", ["areas" => $areas], ["programas" => $programas]);
    }
    
    public function logroText(){
        $txt=Landing::all()->toArray();  
        return view("landing.nosotros-logros", ["txt" => $txt]);
    }
    public function contactoTexts(){
        
        $txt=Landing::all()->toArray();       
        
        return view("landing.landing-contacto", ["txt" => $txt]);

        
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
