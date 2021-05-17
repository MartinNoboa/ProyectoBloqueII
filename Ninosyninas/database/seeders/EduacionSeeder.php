<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EduacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("educacion")->insert([
            //id,area,descripcion
            [
                "contenido" => "Programa de Estimulación Psicopedagógica."
            ],
            [
                "contenido" => "Programa de Integración, Desarrollo Humano."
            ],
            [
                "contenido" => "Programa de formación preescolar."
            ],
            [
                "contenido" => "Ayúdame a estudiar. Apoyo académico, apoyo con tareas etc. a niños escolarizados."
            ],
            [
                "contenido" => "Programa 10-14 para niños desertores de la escuela."
            ],
            [
                "contenido" => "Alfabetización y educación básica para niños no escolarizados."
            ],
            [
                "contenido" => "Taller de computación."
            ],
            [
                "contenido" => "Actividades de verano."
            ]
            ]);
    }
}
