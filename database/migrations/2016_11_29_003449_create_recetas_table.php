<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('recetas', function (Blueprint $table) {
          $table->increments('idRecetas');
          $table->integer('medicos_idMedicos')->unsigned();
          $table->integer('pacientes_idPacientes')->unsigned();
          $table->text('descripcionDosis');
          $table->date('fechaExpedicion');
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('medicos_idMedicos')->references('idMedicos')->on('medicos');
          $table->foreign('pacientes_idPacientes')->references('idPacientes')->on('pacientes');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recetas');
    }
}
