<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('medicos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('rfc',60)->unique();
          $table->string('correo',60);
          $table->string('cedula',60)->nullable();
          $table->string('celular',60);
          $table->integer('users_id')->unsigned();
          $table->integer('hospitales_id')->unsigned();
          $table->string('direccion',60)->nullable();
          $table->string('foto',60)->nullable();
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('users_id')->references('id')->on('users');
          $table->foreign('hospitales_id')->references('id')->on('hospitales');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicos');
    }
}
