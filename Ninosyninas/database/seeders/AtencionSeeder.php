<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtencionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("atencion")->insert([
            //id,area,descripcion
            [
                "contenido" => "Alimentación."
            ],
            [
                "contenido" => "Asesorías y acompañamiento."
            ],
            [
                "contenido" => "Salud."
            ],
            [
                "contenido" => "Desarrollo Humano."
            ]
            ]);
    }
}

