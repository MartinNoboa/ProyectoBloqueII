<?php

namespace Database\Seeders;
//Importar la base de datos
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ChilderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("children")->insert([
            //id,nombre,apellido_paterno,apellido_materno,fecha_naciemiento ,grado
            [
                "nombre" => "Luis", 
                "apellido_paterno" => "Manuel",
                "apellido_materno" => "Gonzales",
                "fecha_nacimiento"=>"2000-10-15",
                "grado"=>4,
            ], 
            [
                "nombre" => "Pedro", 
                "apellido_paterno" => "Manuel",
                "apellido_materno" => "Gonzales",
                "fecha_nacimiento"=>"2000-10-15",
                "grado"=>4,
            ], 
            [
                "nombre" => "Juan", 
                "apellido_paterno" => "Moncayo",
                "apellido_materno" => "Monar",
                "fecha_nacimiento"=>"2000-10-15",
                "grado"=>4,
            ], 
            [
                "nombre" => "Nicole", 
                "apellido_paterno" => "Estrella",
                "apellido_materno" => "Sanchez",
                "fecha_nacimiento"=>"2000-10-15",
                "grado"=>4,
            ], 
            [
                "nombre" => "Luis Miguel", 
                "apellido_paterno" => "Manuel",
                "apellido_materno" => "Gonzales",
                "fecha_nacimiento"=>"2000-10-15",
                "grado"=>4,
            ], 
            [
                "nombre" => "Francisco", 
                "apellido_paterno" => "Escudero",
                "apellido_materno" => "Paredes",
                "fecha_nacimiento"=>"2000-10-15",
                "grado"=>4,
            ], 
            [
                "nombre" => "Antonio", 
                "apellido_paterno" => "Valencia",
                "apellido_materno" => "de Jesus",
                "fecha_nacimiento"=>"2000-10-15",
                "grado"=>4,
            ], 
            [
                "nombre" => "Samuel", 
                "apellido_paterno" => "Torres",
                "apellido_materno" => "Granados",
                "fecha_nacimiento"=>"2000-10-15",
                "grado"=>4,
            ], 
        ]);
    }
}
