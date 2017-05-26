<?php

use Illuminate\Database\Seeder;
use App\Biblioteca\Usuario;

class UsuarioSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Usuario::create([
            'id_usuario' => 1,
            'id_rol' => 1,
            'nombre' => 'Jose',
            'ape_pat' => 'Perez',
            'ape_mat' => 'Morales',
            'username' => 'pepe',
            'password' => '123456',
            'tipo' => 'adm',
        ]);
        Usuario::create([
            'id_usuario' => 2,
            'id_rol' => 3,
            'nombre' => 'Erlinda',
            'ape_pat' => 'Chambi',
            'ape_mat' => 'Manzano',
            'username' => 'erly',
            'password' => '123456',
            'tipo' => 'lec',
        ]);
        Usuario::create([
            'id_usuario' => 3,
            'id_rol' => 2,
            'nombre' => 'Angel',
            'ape_pat' => 'Antezana',
            'ape_mat' => 'Flores',
            'username' => 'anghel',
            'password' => '123456',
            'tipo' => 'lec',
        ]);
        Usuario::create([
            'id_usuario' => 4,
            'id_rol' => 3,
            'nombre' => 'Arnold',
            'ape_pat' => 'Vargas',
            'ape_mat' => 'Daza',
            'username' => 'arnold',
            'password' => '123456',
            'tipo' => 'lec',
        ]);
        Usuario::create([
            'id_usuario' => 5,
            'id_rol' => 2,
            'nombre' => 'Faviola',
            'ape_pat' => 'Salgado',
            'ape_mat' => 'Valda',
            'username' => 'favi',
            'password' => '123456',
            'tipo' => 'lec',
        ]);
        Usuario::create([
            'id_usuario' => 6,
            'id_rol' => 3,
            'nombre' => 'Nestor',
            'ape_pat' => 'Almendras',
            'ape_mat' => 'Lopez',
            'username' => 'nestor',
            'password' => '123456',
            'tipo' => 'lec',
        ]);
        Usuario::create([
            'id_usuario' => 7,
            'id_rol' => 2,
            'nombre' => 'Lady',
            'ape_pat' => 'Cuizara',
            'ape_mat' => 'Porco',
            'username' => 'lady',
            'password' => '123456',
            'tipo' => 'lec',
        ]);
        Usuario::create([
            'id_usuario' => 8,
            'id_rol' => 3,
            'nombre' => 'Carlos',
            'ape_pat' => 'Orihuela ',
            'ape_mat' => 'Berrios',
            'username' => 'carlos',
            'password' => '123456',
            'tipo' => 'lec',
        ]);
        Usuario::create([
            'id_usuario' => 9,
            'id_rol' => 3,
            'nombre' => 'Rodrigo',
            'ape_pat' => 'Vargas',
            'ape_mat' => 'Bazoaldo',
            'username' => 'rodrigo',
            'password' => '123456',
            'tipo' => 'lec',
        ]);
        Usuario::create([
            'id_usuario' => 10,
            'id_rol' => 3,
            'nombre' => 'Reinaldo',
            'ape_pat' => 'Sejas',
            'ape_mat' => 'Encinas',
            'username' => 'reinaldo',
            'password' => '123456',
            'tipo' => 'lec',
        ]);
    }

}
