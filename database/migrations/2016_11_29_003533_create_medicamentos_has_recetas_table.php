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
          $table->integer('medicamentos_idMedicamentos')->unsigned()->index();
          $table->integer('recetas_idRecetas')->unsigned()->index();
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('medicamentos_idMedicamentos')->references('idMedicamentos')->on('medicamentos');
          $table->foreign('recetas_idRecetas')->references('idRecetas')->on('recetas');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medicamentos_has_recetas');
    }
}
