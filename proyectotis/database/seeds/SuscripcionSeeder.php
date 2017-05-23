<?php

use Illuminate\Database\Seeder;

use App\Biblioteca\Suscripcion;

class SuscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Suscripcion::create([
        	'id_usuario' => 2,
        	'id_libro' => 1,
        	'fecha' => '2016-05-31',
        	'precio' => 34.6,
        	]);
         Suscripcion::create([
            'id_usuario' => 2,
            'id_libro' => 2,
            'fecha' => '2016-05-31',
            'precio' => 34.6,
            ]);
         Suscripcion::create([
            'id_usuario' => 2,
            'id_libro' => 3,
            'fecha' => '2016-05-31',
            'precio' => 34.6,
            ]);
         Suscripcion::create([
            'id_usuario' => 3,
            'id_libro' => 4,
            'fecha' => '2016-05-31',
            'precio' => 34.6,
            ]);
         Suscripcion::create([
            'id_usuario' => 3,
            'id_libro' => 5,
            'fecha' => '2016-05-31',
            'precio' => 34.6,
            ]);
    }
}
