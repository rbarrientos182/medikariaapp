<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmaciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('farmacias', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombrefarmacia',60);
          $table->string('direccionfarmacia',60);
          $table->string('latitud',60);
          $table->string('longitud',60);
          $table->string('telefono',60)->nullable();
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
        Schema::dropIfExists('farmacias');
    }
}
