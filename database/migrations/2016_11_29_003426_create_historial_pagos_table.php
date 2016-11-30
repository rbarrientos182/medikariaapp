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
          $table->increments('idhistorial_pagos');
          $table->integer('usuarios_idUsuarios')->unsigned();
          $table->integer('recetas_idRecetas')->unsigned();
          $table->double('total');
          $table->integer('farmacia_idFarmacias')->unsigned();
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('usuarios_idUsuarios')->references('idUsuarios')->on('usuarios');
          $table->foreign('recetas_idRecetas')->references('idRecetas')->on('recetas');
          $table->foreign('farmacia_idFarmacias')->references('idFarmacias')->on('farmacias');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('historial_pagos');
    }
}
