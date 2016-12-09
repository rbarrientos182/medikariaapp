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
          $table->integer('users_id')->unsigned();
          $table->integer('recetas_id')->unsigned();
          $table->double('total');
          $table->integer('farmacias_id')->unsigned();
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('users_id')->references('id')->on('users');
          $table->foreign('recetas_id')->references('id')->on('recetas');
          $table->foreign('farmacias_id')->references('id')->on('farmacias');

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
