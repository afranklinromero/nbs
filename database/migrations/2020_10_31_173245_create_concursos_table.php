<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concurso', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //para db relacional
            $table->id();
            $table->bigInteger('configuracion_id')->unsigned();
            $table->string('nombre', 256);
            $table->string('picture', 256)->default('picture.jpg');
            $table->dateTime('fechaini')->default(now());
            $table->dateTime('fechafin')->default(now());
            $table->timestamps();
            $table->integer('estado')->default(1);

            $table->foreign('configuracion_id')->references('id')->on('configuracion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concurso');
    }
}
