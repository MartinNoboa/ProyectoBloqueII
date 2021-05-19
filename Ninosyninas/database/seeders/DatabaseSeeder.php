<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //Tablas sin llaves foráneas
            UserSeeder::class,
            RoleSeeder::class,
            PermitSeeder::class,
           
            //Tablas de relacion
            PermitRoleSeeder::class,
            RoleUserSeeder::class,

            //Landing tables 
            LandingSeeder::class,
            PatronatoSeeder::class,
            EduacionSeeder::class,
            AtencionSeeder::class,
           
        ]);
    }
}
