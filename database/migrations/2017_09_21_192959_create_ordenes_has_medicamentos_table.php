<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesHasMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ordenes_has_recetas', function (Blueprint $table) {
          $table->primary(['ordenes_id', 'medicamentos_id']);
          $table->integer('ordenes_id')->unsigned()->index();
          $table->integer('medicamentos_id')->unsigned()->index();
          $table->integer('cantidad_or');
          $table->decimal('subtotal_or',10,2);
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('ordenes_id')->references('id')->on('ordenes');
          $table->foreign('medicamentos_id')->references('id')->on('medicamentos');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
