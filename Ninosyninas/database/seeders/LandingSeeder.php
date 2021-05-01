<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Landing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
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
