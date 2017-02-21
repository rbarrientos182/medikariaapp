<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('medicamentos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombremedicamento',60);
          $table->string('laboratorio',60);
          $table->string('presentacion',60);
          $table->string('contenido',60);
          $table->string('imagenmedicamento',60)->nullable();
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
        Schema::dropIfExists('medicamentos');
    }
}
