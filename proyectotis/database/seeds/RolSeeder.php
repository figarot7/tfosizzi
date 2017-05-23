<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Rol::create([
            'nombre_rol' => "Administrador",
            'nivel_permiso'=> 1,
        ]);
        Rol::create([
            'nombre_rol' => "Docente",
            'nivel_permiso'=> 2,
        ]);
        Rol::create([
            'nombre_rol' => "Estudiante",
            'nivel_permiso'=> 3,
        ]);
        Rol::create([
            'nombre_rol' => "Secretaria",
            'nivel_permiso'=> 2,
        ]);
    }

}
