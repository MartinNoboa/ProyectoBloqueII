<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("donadores")->insert([
            //id,nombre,apellido_paterno,apellido_materno,email, telefono,aprobado
            [
                "nombre" => "Martin", 
                "apellido_paterno" => "Noboa",
                "apellido_materno" => "Noboa",
                "email"=> "martinnoboa@gmail.com",
                "telefono"=>"4431231234",
                "aprobado"=> 1,
            ], 
            [
                "nombre" => "Jose", 
                "apellido_paterno" => "Hyeon",
                "apellido_materno" => "Parraga",
                "email"=> "email@gmail.com",
                "telefono"=>"4431231234",
                "aprobado"=> 1,
            ],
            [
                "nombre" => "Francisco", 
                "apellido_paterno" => "Escudero",
                "apellido_materno" => "Garcia",
                "email"=> "mail@gmail.com",
                "telefono"=>"4431231234",
                "aprobado"=> 1,
            ],  
            [
                "nombre" => "Luis", 
                "apellido_paterno" => "Guardiola",
                "apellido_materno" => "Suarez",
                "email"=> "email@gmail.com",
                "telefono"=>"4431231234",
                "aprobado"=> 0,
            ], 
            [
                "nombre" => "Anthony", 
                "apellido_paterno" => "Bonet",
                "apellido_materno" => "Garcia",
                "email"=> "email@gmail.com",
                "telefono"=>"4431231234",
                "aprobado"=> 0,
            ], 
        ]);
    }
}
