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
          $table->increments('id');
          $table->integer('medicos_id')->unsigned();
          $table->integer('pacientes_id')->unsigned();
          $table->text('descripcionDosis');
          $table->date('fechaExpedicion');
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('medicos_id')->references('id')->on('medicos');
          $table->foreign('pacientes_id')->references('id')->on('pacientes');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetas');
    }
}
