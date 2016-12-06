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
          $table->increments('idMedicos');
          $table->string('nombre',60);
          $table->string('rfc',60)->unique();
          $table->string('correo',60);
          $table->string('cedula',60)->nullable();
          $table->string('celular',60);
          $table->integer('usuarios_idUsuarios')->unsigned();
          $table->integer('hospital_idhospital')->unsigned();
          $table->string('direccion',60)->nullable();
          $table->string('foto',60)->nullable();
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('usuarios_idUsuarios')->references('idUsuarios')->on('usuarios');
          $table->foreign('hospital_idhospital')->references('idhospital')->on('hospital');
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
