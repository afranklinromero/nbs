<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemaconcursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temaconcurso', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //para db relacional
            $table->id();
            $table->bigInteger('tema_id')->unsigned();
            $table->bigInteger('concurso_id')->unsigned();
            $table->timestamp('fechaini')->default(now());
            $table->timestamp('fechafin')->default(now());
            $table->timestamps();
            $table->integer('estado')->default(1);

            $table->foreign('tema_id')->references('id')->on('tema')->onDelete('cascade');
            $table->foreign('concurso_id')->references('id')->on('concurso')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temaconcurso');
    }
}
