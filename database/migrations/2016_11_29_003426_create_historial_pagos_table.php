<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('historial_pagos', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('usuarios_id')->unsigned();
          $table->integer('recetas_id')->unsigned();
          $table->double('total');
          $table->integer('farmacia_id')->unsigned();
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('usuarios_id')->references('id')->on('usuarios');
          $table->foreign('recetas_id')->references('id')->on('recetas');
          $table->foreign('farmacia_id')->references('id')->on('farmacias');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_pagos');
    }
}
