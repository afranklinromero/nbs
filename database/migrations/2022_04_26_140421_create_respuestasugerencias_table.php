<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasugerenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestasugerencia', function (Blueprint $table) {
            $table->id();
            //$table->bigInteger('user_id')->unsigned();
            $table->bigInteger('sugerencianbs_id')->unsigned();
            $table->string('respuesta', 1024);
            $table->integer('estado')->default(1);
            $table->timestamps();

            $table->foreign('sugerencianbs_id')->references('id')->on('sugerenciasnbs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestasugerencia');
    }
}
