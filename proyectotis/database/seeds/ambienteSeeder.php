<?php

use Illuminate\Database\Seeder;
use App\Ambiente;

class ambienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Ambiente::create([
        'id_ambiente' => 1,
        'nombre_ambiente' => 'Auditorio Edf nuevo',
        'descripcion_ambiente' => 'Se encuentra al final del edifio nuevo',
        'capacidad' => '100',
        'estado' => '1',
        'activo' => '1'
        ]);
        Ambiente::create([
          'id_ambiente' => 2,
          'nombre_ambiente' => 'Auditorio industrial',
          'descripcion_ambiente' => 'Se encuentra al final del edifio antiguo',
          'capacidad' => '90',
          'estado' => '1',
          'activo' => '1'
          ]);
           Ambiente::create([
          'id_ambiente' => 3,
          'nombre_ambiente' => 'Auditorio biblioteca',
          'descripcion_ambiente' => 'Se encuentra ubicado en la puerda de tecnologia',
          'capacidad' => '200',
          'estado' => '1',
          'activo' => '1'
          ]);
    }
}
