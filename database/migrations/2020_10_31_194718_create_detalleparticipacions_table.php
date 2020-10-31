<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleparticipacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleparticipacion', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //para db relacional
            $table->id();
            $table->bigInteger('participacion_id')->unsigned();
            $table->bigInteger('pregunta_id')->unsigned();
            $table->bigInteger('respuesta_id')->unsigned();
            $table->bigInteger('escorrecto')->default(0);
            $table->timestamps();
            $table->integer('estado')->default(1);

            $table->foreign('participacion_id')->references('id')->on('participacion');
            $table->foreign('pregunta_id')->references('id')->on('pregunta');
            $table->foreign('respuesta_id')->references('id')->on('respuesta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleparticipacion');
    }
}
