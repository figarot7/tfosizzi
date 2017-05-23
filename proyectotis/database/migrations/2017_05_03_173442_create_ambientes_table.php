<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambiente', function (Blueprint $table) {
            $table->increments('id_ambiente');
            $table->string('nombre_ambiente');
            $table->string('descripcion_ambiente');
            $table->integer('capacidad');
            $table->enum('estado', [1, 0])->default(1);
            $table->enum('activo', [1, 0])->default(1);
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
        Schema::drop('ambiente');
    }
}
