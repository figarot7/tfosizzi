<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->increments('id_reserva');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_ambiente')->unsigned();
            $table->date('fecha_reserva');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->string('descripcion_reserva');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');
            $table->foreign('id_ambiente')->references('id_ambiente')->on('ambiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reserva');
    }
}
