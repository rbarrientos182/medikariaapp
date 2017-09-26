<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ordenes', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('recetas_id')->unsigned();
          $table->decimal('subtotal',10,2);
          $table->decimal('comision',10,2);
          $table->boolean('estatusorden')->default(false);
          $table->date('fechapago')->default(false);
          $table->timestamps();
          $table->softDeletes();
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
        Schema::dropIfExists('ordenes');
    }
}
