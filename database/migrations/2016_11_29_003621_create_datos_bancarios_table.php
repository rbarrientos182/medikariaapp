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
          $table->integer('users_id')->unsigned();
          $table->integer('bancos_id')->unsigned();
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('users_id')->references('id')->on('users');
          $table->foreign('bancos_id')->references('id')->on('bancos');
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
