<?php

use Illuminate\Database\Seeder;
use App\Reserva;

class ReservaSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Reserva::create([
            'id_usuario' => 2,
            'id_ambiente' => 1,
            'fecha_reserva' => '2017-05-31',
            'hora_inicio' => '06:45:41',
            'hora_fin' => '08:45:41',
            'descripcion_reserva' => 'Reserva para dar el examen de base de datos 2',
        ]);
        Reserva::create([
            'id_usuario' => 3,
            'id_ambiente' => 2,
            'fecha_reserva' => '2017-06-01',
            'hora_inicio' => '11:15:00',
            'hora_fin' => '12:45:00',
            'descripcion_reserva' => 'Examen de Elementos y esctructura de datos',
        ]);
        Reserva::create([
            'id_usuario' => 4,
            'id_ambiente' => 2,
            'fecha_reserva' => '2017-06-13',
            'hora_inicio' => '17:15:00',
            'hora_fin' => '18:45:00',
            'descripcion_reserva' => 'Examen de Estadistica 2',
        ]);
        Reserva::create([
            'id_usuario' => 5,
            'id_ambiente' => 1,
            'fecha_reserva' => '2017-06-14',
            'hora_inicio' => '08:15:00',
            'hora_fin' => '09:45:00',
            'descripcion_reserva' => 'Examen de mesa de sistemas de informacion',
        ]);
        Reserva::create([
            'id_usuario' => 6,
            'id_ambiente' => 3,
            'fecha_reserva' => '2017-09-14',
            'hora_inicio' => '11:15:00',
            'hora_fin' => '12:45:00',
            'descripcion_reserva' => 'Evento de bienvenida al semestre',
        ]);
        Reserva::create([
            'id_usuario' => 7,
            'id_ambiente' => 3,
            'fecha_reserva' => '2017-09-23',
            'hora_inicio' => '11:15:00',
            'hora_fin' => '15:45:00',
            'descripcion_reserva' => 'Jornadas de etical hacking',
        ]);
        Reserva::create([
            'id_usuario' => 7,
            'id_ambiente' => 3,
            'fecha_reserva' => '2017-09-24',
            'hora_inicio' => '11:15:00',
            'hora_fin' => '15:45:00',
            'descripcion_reserva' => 'Jornadas de seguridad informatica',
        ]);
    }

}
