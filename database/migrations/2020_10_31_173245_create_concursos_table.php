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
            $table->bigInteger('user_id')->unsigned()->default(2);
            $table->string('nombre', 256);
            $table->string('descripcion', 512)->default('Concurso para motivar el aprendizaje de las normas bolivianas de salud.');
            $table->string('picture', 256)->default('picture.jpg');
            $table->timestamp('fechaini')->default(now());
            $table->timestamp('fechafin')->default(now());
            $table->timestamps();
            $table->integer('estado')->default(1);

            $table->foreign('configuracion_id')->references('id')->on('configuracion');
            $table->foreign('user_id')->references('id')->on('users');
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
