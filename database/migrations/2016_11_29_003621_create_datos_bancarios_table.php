<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosBancariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('datos_bancarios', function (Blueprint $table) {
          $table->increments('id');
          $table->string('notarjeta',60);
          $table->date('fechavencimiento');
          $table->integer('usuarios_id')->unsigned();
          $table->integer('banco_id')->unsigned();
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('usuarios_id')->references('id')->on('usuarios');
          $table->foreign('banco_id')->references('id')->on('banco');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_bancarios');
    }
}
