<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class areasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("areas")->insert([
            //id,area,descripcion
            [
                "area" => "Nutricion", 
                "descripcion" => "Esta area se especializa en la revision del desarrollo y formacion nutrimental del niño"
            ],
            [
                "area" => "Psicologia", 
                "descripcion" => "Esta area se especializa en la revision del desarrollo y formacion psicologico del niño"
            ]
            ]);
    }
}
