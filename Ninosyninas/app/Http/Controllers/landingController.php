<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class LandingController extends Controller{
    public function homeTexts(){
        
        $textos = [
            "card1" => "Nos acompañamos en la bella tarea de vivir la vida",
            "cardt1" => "Título de la tarjeta1",
            "card2" => "Para que en la calle no sea su futuro acompáñanos a hacer la diferencia",
            "cardt2" => "Título de la tarjeta2",
            "card3" => "Niños resilientes aprendiendo a vivir, enfrentando retos en la vida",
            "cardt3" => "Título de la tarjeta3",
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
            "Mision" => "Generamos un programa de formación integral con las niñas, niños y adolescentes, que junto con su 
                        familia han hecho de la calle su lugar de trabajo y un espacio importante de socialización, para 
                        desarrollar sus capacidades básicas y juntos construir alternativas que les permitan mejores 
                        oportunidades y calidad de vida.",
            "Vision" => "Queremos que los niños y niñas que hoy se encuentran en condiciones adversas por la marginación y 
                        tienen que incorporarse a la economía informal a temprana edad, tengan mejores oportunidades tanto de
                         desarrollo personal como económicas a futuro, y diferentes alternativas laborales para que la calle 
                         no sea su opción.
                        Que no tengamos más niños y niñas trabajando en la calle para contribuir a la economía familiar. Sino
                         que todos tengan una alternativa real de desarrollo integral, y así poder disfrutar de su niñez y sus
                          derechos."
        ];

        return view("landing.landing-home", ["textos" => $textos]);
    }

    public function nosotrosTexts(){

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
        return view("landing.landing-nosotros", ["textos" => $textos]);
        
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

        $logro = "Contamos con un espacio construido especialmente para el desarrollo de nuestro proyecto, en un terreno donado por Gobierno del Estado y la construcción por CEDAR FOUNDATION una fundación Canadiense.
        Atendemos a 130 niños y niñas desde los diferentes programas.
        
        A 20 años hemos servido alrededor de 500,000 almuerzos.
        
        Tenemos al 95% de los niños y niñas inscrito en alguna modalidad educativa oficial.
        
        Se han reducido los índices de inasistencia y deserción escolar, elevando de 2 o 3 años escolares a por lo menos a 8, están concluyendo la primaria.
        
        Hemos logrado una importante participación de las madres de familia en el proceso de escolarización y educación de sus hijos.
        
        El 60 % de los niños y niñas que pasan por la Institución ya no regresan a la calle, se integran al trabajo formal.";
        return view("landing.nosotros-logros", ["logro" => $logro]);
    }

    public function noticiasTexts(){
        $noticia = [
            "1" => [
                "id" => "1",
                "titulo" => "Titulo de prueba",
                "cuerpo" => "Este es un texto de prueba para demostrar el funcionamiento de esta funcion.",
                "foto" => "ejemplo"
            ],
            "2" => [
                "id" => "1",
                "titulo" => "Titulo de prueba2",
                "cuerpo" => "Este es un texto de prueba para demostrar el funcionamiento de esta funcion.2",
                "foto" => "ejemplo"
            ]
        ];
    
        return view("landing.landing-noticias", ["noticia" => $noticia]);
    }

    public function index()
    {
        //para pasar infor directamente al index
        //$datos['donadores']=Donadores::paginate(10);

        $noticias = news::all();

        return view('landing.landing-noticias',['noticias' => $noticias]);
    }
}
