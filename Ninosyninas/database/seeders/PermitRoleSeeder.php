<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la base de datos
use Illuminate\Support\Facades\DB;


class PermitRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        DB::table("permits_roles")->insert([
            //id,permit_id, role_id, created_at(N), updated_at(N)
            /*
            permits
            * 1 - manejarAdmins
            * 2 - manejarDonadores
            * 3 - manejarContenido
            * 4 - editarInformacion
            * 5 - mentoria
            
            roles
            * 1 - super admin
            * 2 - admin
            * 3 - tl
            * 4 - tf
            * 5 - prof
            * 6 - nutricionista
            * 7 - becario
            */
            
            [
                "permit_id" => 1, 
                "role_id" => 1,
            ], 
            [
                "permit_id" => 2, 
                "role_id" => 1,
            ],  
            [
                "permit_id" => 3, 
                "role_id" => 1,
            ],   
            [
                "permit_id" => 4, 
                "role_id" => 1,
            ],    
            [
                "permit_id" => 5, 
                "role_id" => 1,
            ], 
            [
                "permit_id" => 3, 
                "role_id" => 2,
            ],   
            [
                "permit_id" => 4, 
                "role_id" => 2,
            ],   
            [
                "permit_id" => 5, 
                "role_id" => 2,
            ],   
            [
                "permit_id" => 5, 
                "role_id" => 3,
            ],   
            [
                "permit_id" => 5, 
                "role_id" => 4,
            ],    
            [
                "permit_id" => 5, 
                "role_id" => 5,
            ],   
            [
                "permit_id" => 5, 
                "role_id" => 6,
            ],    
            [
                "permit_id" => 3, 
                "role_id" => 7,
            ], 
        ]);
    }
}
