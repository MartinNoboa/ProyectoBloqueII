<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la base de datos
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles_users")->insert([
            //id,role_id, user_id, created_at(N), updated_at(N)
            [
                "role_id" => 1,//superAdmin
                "user_id" => 1, //Martin Noboa
                "activo" => true, //true
                
            ],  
             [
                "role_id" => 1,//superAdmin
                "user_id" => 2, //Adrian Monar
                "activo" => true, //true
            ], 
        ]);
    }
}
