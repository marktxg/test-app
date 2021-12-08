<?php

namespace Database\Seeders;

use App\Models\Course_Tabla;
use App\Models\Topic_Tabla;
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
        // \App\Models\User::factory(10)->create();
        //$this->call(RolesSeeder::class);
        //Course_Tabla::factory(3)->create();
        Topic_Tabla::factory(10)->create();
    }
}
