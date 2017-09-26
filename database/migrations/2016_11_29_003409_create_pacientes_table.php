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
          $table->integer('medicos_id')->unsigned();
          $table->string('nombrepaciente',60);
          $table->string('apellidopacientep',60);
          $table->string('apellidopacientem',60);
          $table->string('direccionpaciente',60);
          $table->string('coloniapaciente',60)->nullable();
          $table->string('cppaciente',45)->nullable();
          $table->string('estatura',60);
          $table->string('peso',60);
          $table->date('nacimiento');
          $table->string('celular',60);
          $table->string('imagenpaciente',60)->nullable();
          $table->string('sexo',45);
          $table->string('emailpaciente'60);->nullable();
          $table->text('padecimientos')->nullable();
          $table->text('alergias')->nullable();
          $tabla->text('cirugias')->nullable();
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('medicos_id')->references('id')->on('medicos');
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
