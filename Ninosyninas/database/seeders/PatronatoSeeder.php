<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatronatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("patronato")->insert([
            [
                "rol" => "Presidente",
                "nombre" => "Jose Perez",
                "informacion" => "Información del patronato",
            ],
            [
                "rol" => "Vicepresidente",
                "nombre" => "Jose Perez",
                "informacion" => "Información del patronato",
            ],
            [
                "rol" => "Tesorero",
                "nombre" => "Jose Perez",
                "informacion" => "Información del patronato",
            ],
            [
                "rol" => "Vocal",
                "nombre" => "Jose Perez",
                "informacion" => "Información del patronato",
            ],
            [
                "rol" => "Vocal",
                "nombre" => "Jose Perez",
                "informacion" => "Información del patronato",
            ],
            [
                "rol" => "Vocal",
                "nombre" => "Jose Perez",
                "informacion" => "Información del patronato",
            ]
            ]);
    }
}
