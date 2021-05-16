<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Landing;
use Illuminate\Support\Facades\DB;

class LandingSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()    
    {
        DB::table("landing")->insert([
            
            [
                "id" => 1,
                "apartado" => "index_acerca_de",
                "contenido" => "Somos un grupo de personas comprometidas con mejorar las condiciones de marginación en que viven muchos niños y sus familias al hacer de la calle su lugar de trabajo. La calle es un medio agresivo y marca de manera importante el desarrollo de los niños que se ven obligados a pasar gran parte del día en ella. La invitación al consumo de drogas, la exposición a riesgos de carácter sexual, la ignorancia y la temprana deserción escolar, hacen de este grupo de menores una población altamente vulnerable. Comenzamos como voluntarios participando en un estudio llamado “100 Ciudades“ coordinado por UNICEF Y La OIT, lo que nos motivó para hacer un 'CENTRO DE ATENCIÓN DE DÍA', desarrollamos nuestra labor desde 1998. Somos una Asociación Civil legalmente constituida y somos una donataria autorizada para expedir recibos deducibles de impuestos. Nos organizamos a través de un patronato, cuya tarea es velar por el buen funcionamiento de la institución.",
            ], 
            [
                "id" => 2,
                "apartado" => "index_mision",
                "contenido" => "Generamos un programa de formación integral con las niñas, niños y adolescentes, que junto con su familia han hecho de la calle su lugar de trabajo y un espacio importante de socialización, para desarrollar sus capacidades básicas y juntos construir alternativas que les permitan mejores oportunidades y calidad de vida.",
            ], 
            [
                "id" => 3,
                "apartado" => "index_vision",
                "contenido" => "Queremos que los niños y niñas que hoy se encuentran en condiciones adversas por la marginación y tienen que incorporarse a la economía informal a temprana edad, tengan mejores oportunidades tanto de desarrollo personal como económicas a futuro, y diferentes alternativas laborales para que la calle no sea su opción. Que no tengamos más niños y niñas trabajando en la calle para contribuir a la economía familiar. Sino que todos tengan una alternativa real de desarrollo integral, y así poder disfrutar de su niñez y sus derechos.",
            ], 
            [
                "id" => 4,
                "apartado" => "nosotros_acerca_de",
                "contenido" => "Somos un grupo de personas comprometidas con mejorar las condiciones de marginación en que viven muchos niños y sus familias al hacer de la calle su lugar de trabajo. La calle es un medio agresivo y marca de manera importante el desarrollo de los niños que se ven obligados a pasar gran parte del día en ella. La invitación al consumo de drogas, la exposición a riesgos de carácter sexual, la ignorancia y la temprana deserción escolar, hacen de este grupo de menores una población altamente vulnerable. Comenzamos como voluntarios participando en un estudio llamado “100 Ciudades“ coordinado por UNICEF Y La OIT, lo que nos motivó para hacer un 'CENTRO DE ATENCIÓN DE DÍA', desarrollamos nuestra labor desde 1998. Somos una Asociación Civil legalmente constituida y somos una donataria autorizada para expedir recibos deducibles de impuestos. Nos organizamos a través de un patronato, cuya tarea es velar por el buen funcionamiento de la institución.",
            ], 
            [
                "id" => 5,
                "apartado" => "nosotros_logros",
                "contenido" => "Contamos con un espacio construido especialmente para el desarrollo de nuestro proyecto, en un terreno donado por Gobierno del Estado y la construcción por CEDAR FOUNDATION una fundación Canadiense. Atendemos a 130 niños y niñas desde los diferentes programas. A 20 años hemos servido alrededor de 500,000 almuerzos. Tenemos al 95% de los niños y niñas inscrito en alguna modalidad educativa oficial. Se han reducido los índices de inasistencia y deserción escolar, elevando de 2 o 3 años escolares a por lo menos a 8, están concluyendo la primaria. Hemos logrado una importante participación de las madres de familia en el proceso de escolarización y educación de sus hijos. El 60 % de los niños y niñas que pasan por la Institución ya no regresan a la calle, se integran al trabajo formal.                ",
            ], 
            [
                "id" => 6,
                "apartado" => "nosotros_necesitamos",
                "contenido" => "A través de nuestros diferentes programas, Educación Salud y Capacitación, apoyamos en la realización de las tareas y proyectos escolares de los niños, atendemos sus necesidades específicas para el aprendizaje (terapia de lenguaje, estimulación Psicopedagógica, comprensión lectora etc.).


                Talleres de: lectura, musicoterapia, de desarrollo humano, Computación y Actividades de verano. Inculcamos Valores y Hábitos de orden y limpieza
                
                
                Servimos un promedio de 120 comidas, que para muchos significa el único alimento del día. El 95% de los niños está inscrito en alguna modalidad educativa oficial. El 100% de los niños lleva un seguimiento del esquema de vacunación oficial. Se desparasita al 100% de los niños cada 6 meses.
                
                
                COMO TRABAJAMOS EN CONTINGENCIA POR PANDEMIA
                
                
                Debido a la contingencia sanitaria suspendimos actividades con los niños de marzo a junio, durante ese tiempo aprovechamos para capacitarnos en línea el equipo de trabajo en diferentes temas, para seguir atendiendo con calidad a nuestros beneficiarios. Además, entregamos dos despensas al mes a las familias de los niños, ya que ellos tampoco tuvieron la oportunidad de trabajar por la contingencia.
                
                
                Reanudamos la atención a puerta abierta a partir de Julio alternando la asistencia de los niños (en promedio 30 por día) para respetar las recomendaciones de sana distancia además de trabajar todos con cubre boca, lavado de manos y control de temperatura. Atendemos a 75 Niños, Niñas y Adolescentes, de preescolar a preparatoria. Trabajamos con la nueva modalidad en línea aprendiendo juntos niños, papás y maestros, proporcionamos computadora e internet ya que los niños no cuentan con estas herramientas, y enseñamos a hacer uso de ellas. Apoyamos en la realización de tareas, así como en la entrega de las mismas vía internet y en las video clases.
                
                ",
            ], 
            [
                "id" => 7,
                "apartado" => "nosotros_voluntariado",
                "contenido" => "Si quieres formar parte de nuestro equipo de trabajo, no dudes en ponerte en contacto con nosotros. Ser voluntario es una forma de empatía, es ser, estar en el mundo, meterte en los zapatos del otro y acompañarlo en esta tarea de vivir la vida.


                Funcionamos en gran parte gracias a las personas que nos brindan su tiempo, su dedicación y sus ganas de compartir para apoyar nuestra labor.
                
                
                Contamos con alumnos de diversas instituciones que realizan su servicio social apoyando los diferentes programas.",
            ], 
            [
                "id" => 8,
                "apartado" => "contactanos_contacto",
                "contenido" => "¡Llámanos!
                +52 442 182 7987
                Calle:
                Francisco González de Cosío 110, Plaza de las Americas, 76050 Santiago de Querétaro, Qro. México.
                E-mail:
                ninosyninasdemexico@yahoo.com",
            ], 
            [
                "id" => 9,
                "apartado" => "donar_donar",
                "contenido" => "Dona con transferencia
                Bancomer
                Niños y Niñas de México, A. C.
                No. Cuenta: 0101426486
                Clabe: 012680001014264867
                Envía tu depósito por correo a ninosyninasdemexico@yahoo.com
                y te haremos llegar tu recibo deducible de impuestos.",
            ], 
            [
                "id" => 10,
                "apartado" => "",
                "contenido" => "",
            ], 
        ]);












/*

        // \App\Models\User::factory(10)->create();

        $landing = new Landing();

        $landing->apartado = "aNosotros";
        $landing->contenido = "Somos un grupo de personas comprometidas con mejorar las condiciones de marginación en que viven 
        muchos niños y sus familias al hacer de la calle su lugar de trabajo. La calle es un medio agresivo
         y marca de manera importante el desarrollo de los niños que se ven obligados a pasar gran parte del 
         día en ella. La invitación al consumo de drogas, la exposición a riesgos de carácter sexual, la
          ignorancia y la temprana deserción escolar, hacen de este grupo de menores una población altamente 
          vulnerable.
        Comenzamos como voluntarios participando en un estudio llamado “100 Ciudades“ coordinado por UNICEF 
        Y La OIT, lo que nos motivó para hacer un 'CENTRO DE ATENCIÓN DE DÍA', desarrollamos nuestra labor desde
         1998. Somos una Asociación Civil legalmente constituida y somos una donataria autorizada para expedir 
         recibos deducibles de impuestos. Nos organizamos a través de un patronato, cuya tarea es velar 
         por el buen funcionamiento de la institución.";

        $landing->save();

        
        /*DB::table('landing')->insert([
            //id_landing, apartado, contenido, fecha(N)
            [
                "apartado" => "aNosotros",
                "contenido" => "Somos un grupo de personas comprometidas con mejorar las condiciones de marginación en que viven 
                muchos niños y sus familias al hacer de la calle su lugar de trabajo. La calle es un medio agresivo
                 y marca de manera importante el desarrollo de los niños que se ven obligados a pasar gran parte del 
                 día en ella. La invitación al consumo de drogas, la exposición a riesgos de carácter sexual, la
                  ignorancia y la temprana deserción escolar, hacen de este grupo de menores una población altamente 
                  vulnerable.
                Comenzamos como voluntarios participando en un estudio llamado “100 Ciudades“ coordinado por UNICEF 
                Y La OIT, lo que nos motivó para hacer un 'CENTRO DE ATENCIÓN DE DÍA', desarrollamos nuestra labor desde
                 1998. Somos una Asociación Civil legalmente constituida y somos una donataria autorizada para expedir 
                 recibos deducibles de impuestos. Nos organizamos a través de un patronato, cuya tarea es velar 
                 por el buen funcionamiento de la institución."

            ]
        ]);*/
    }
}
