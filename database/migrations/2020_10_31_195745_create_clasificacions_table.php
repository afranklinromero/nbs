<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasificacion', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //para db relacional
            $table->id();
            $table->bigInteger('concurso_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('puntos')->default(0);
            $table->timestamps();
            $table->integer('estado')->default(1);

            $table->foreign('concurso_id')->references('id')->on('concurso');
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
        Schema::dropIfExists('clasificacion');
    }
}
