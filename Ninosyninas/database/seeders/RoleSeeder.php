<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la base de datos
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        DB::table("roles")->insert([
            //id,rol,descripcion, created_at(N), updated_at(N)
            [
                "rol" => "Super admin", 
                "descripcion" => "Usuario con control absoluto sobre la pagina",
            ],  
            [
                "rol" => "Admin", 
                "descripcion" => "Usuario con control sobre la mayoria de la funcionalidad de la pagina",
            ],   
            [
                "rol" => "Terapista de lenguage", 
                "descripcion" => "Persona encargada de apoyar a los niños en terapia de lenguaje.",
            ], 
               
            [
                "rol" => "Terapista fisico", 
                "descripcion" => "Persona encargada de apoyar a los niños en terapia fisica.",
            ],    
            [
                "rol" => "Profesor", 
                "descripcion" => "Persona encargada de apoyar a los niños en pedagogia.",
            ],     
            [
                "rol" => "Nutricionista", 
                "descripcion" => "Persona encargada de apoyar a los niños en nutricionismo.",
            ],      
            [
                "rol" => "Becario", 
                "descripcion" => "Persona que ayuda en la organizacion por voluntariado o servicio social.",
            ], 
        ]);
    }
}
