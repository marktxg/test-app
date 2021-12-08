<?php

namespace Database\Seeders;

use App\Models\Rol_Tabla;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = new Rol_Tabla();
        $roles->nameRol ='Administrador';
        $roles->save();
        $roles1 = new Rol_Tabla();
        $roles1->nameRol ='Usuario';
        $roles1->save();
        $roles2 = new Rol_Tabla();
        $roles2->nameRol ='Profesor';
        $roles2->save();
    }
}
