<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscripcion', function (Blueprint $table) {
            $table->increments('id_suscripcion');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_libro')->unsigned();
            $table->date('fecha');
            $table->float('precio');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');              
            $table->foreign('id_libro')->references('id_libro')->on('libro');
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
        Schema::drop('suscripcion');
    }
}
