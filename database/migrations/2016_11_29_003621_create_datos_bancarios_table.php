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
          $table->increments('idDatos_Bancarios');
          $table->string('notarjeta',60);
          $table->date('fechavencimiento');
          $table->integer('usuarios_idUsuarios')->unsigned();
          $table->integer('banco_idbanco')->unsigned();
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('usuarios_idUsuarios')->references('idUsuarios')->on('usuarios');
          $table->foreign('banco_idbanco')->references('idbanco')->on('banco');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('datos_bancarios');
    }
}
