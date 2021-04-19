<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la base de datos
use Illuminate\Support\Facades\DB;

class PermitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        
        DB::table("permits")->insert([
            //id,permiso,descripcion, created_at(N), updated_at(N)
            [
                "permiso" => "manejarAdmins", 
                "descripcion" => "Permite registrar o eliminar un administrador",
            ],
            [
                "permiso" => "manejarDonadores", 
                "descripcion" => "Manejar la informacion acerca de los donadores",
            ],
            [
                "permiso" => "manejarContenido", 
                "descripcion" => "Agregar,editar y eliminar fotos y noticias",
            ], 
            [
                "permiso" => "editarInformacion", 
                "descripcion" => "Editar secciones de la pagina publica, no contenido",
            ],  
            [
                "permiso" => "mentoria", 
                "descripcion" => "Generar reportes",
            ],  
        ]);
    }
}
