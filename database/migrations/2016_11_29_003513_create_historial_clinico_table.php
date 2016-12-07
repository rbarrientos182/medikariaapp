<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialclinicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('historial_clinicos', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('recetas_id')->unsigned();
          $table->text('diagnostico');
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('recetas_id')->references('id')->on('recetas');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_clinico');
    }
}
