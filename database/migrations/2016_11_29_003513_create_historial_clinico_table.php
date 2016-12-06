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
      Schema::create('historial_clinico', function (Blueprint $table) {
          $table->increments('idHistorialClinico');
          $table->integer('recetas_idRecetas')->unsigned();
          $table->text('diagnostico');
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('recetas_idRecetas')->references('idRecetas')->on('recetas');
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
