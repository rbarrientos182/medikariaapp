<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicamentosHasRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('medicamentos_has_recetas', function (Blueprint $table) {
          $table->primary(['medicamentos_id', 'recetas_id']);
          $table->integer('medicamentos_id')->unsigned()->index();
          $table->integer('recetas_id')->unsigned()->index();
          $table->text('dosis');
          $table->integer('dias');
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('medicamentos_id')->references('id')->on('medicamentos');
          $table->foreign('recetas_id')->references('id')->on('recetas');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamentos_has_recetas');
    }
}
