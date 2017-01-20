<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pacientes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombrepaciente',60);
          $table->string('direccionpaciente',60);
          $table->string('estatura',60);
          $table->string('peso',60);
          $table->date('nacimiento');
          $table->string('celular',60)->nullable();
          $table->string('foto',60)->nullable();
          $table->timestamps();
          $table->softDeletes();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
