<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //para db relacional
            //$table->collate = 'utf8_unicode_ci'; //para db relacional
            $table->id();
            $table->bigInteger('user_id')->unsigned()->default(1);
            $table->string('titulo', 256);
            $table->date('fecha');
            $table->string('tapa', 512);
            $table->string('ext', 4)->default('png');
            $table->string('documentopdf', 512)->nullable();
            //$table->string('nombredocumentopdf', 512);
            $table->string('autor', 128)->default('Ministerio de Salud y Depeortes - Estado Plurinacional de Bolivia');
            $table->string('edicion', 64)->nullable();
            $table->string('serie', 64)->nullable();
            $table->string('nropublicacion')->nullable();
            $table->string('lugarpublicacion', 64);
            $table->integer('orden');
            $table->timestamps();
            $table->integer('estado')->default(1);

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
        Schema::dropIfExists('libro');
    }
}
