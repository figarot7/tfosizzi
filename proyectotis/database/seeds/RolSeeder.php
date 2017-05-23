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
            'nombre_rol' => "Docente",
        ]);
        Rol::create([
            'nombre_rol' => "Estudiante",
        ]);
        Rol::create([
            'nombre_rol' => "Secretaria",
        ]);
    }

}
