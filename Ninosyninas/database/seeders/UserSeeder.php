<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        DB::table("users")->insert([
            //id,nombre,apellido_paterno,apellido_materno,fecha_naciemiento ,fecha_inicio, ocupacion, telefono, mail, email_verified_at(N), ,remember_token(N)
            [
                "nombre" => "Martin", 
                "apellido_paterno" => "Noboa",
                "apellido_materno" => "Noboa",
                "fecha_nacimiento"=>"2000-10-15",
                "fecha_inicio"=>"2000-10-15",
                "ocupacion"=>"2020-11-10",
                "telefono"=>"4431231234",
                "mail"=> "martinnoboa@gmail.com",
                "contrasenia"=> Hash::make("admin"),
            ], 
            [
                "nombre" => "Adrian", 
                "apellido_paterno" => "Monar",
                "apellido_materno" => "Monar",
                "fecha_nacimiento"=>"1999-05-08",
                "fecha_inicio"=>"2020-10-15",
                "ocupacion"=>"2019-7-03",
                "telefono"=>"2000-10-15",
                "mail"=> "adrianmonar@gmail.com",
                //"contrasenia"=> Hash::make("admin"),
                "contrasenia"=> "admin",

            ], 
        ]);
    }
}
