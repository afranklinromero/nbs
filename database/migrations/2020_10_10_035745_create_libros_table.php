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
            $table->id();
            $table->string('titulo', 256);
            $table->date('fecha');
            $table->string('tapa', 512);
            $table->string('documentopdf', 512);
            $table->string('autor', 128)->default('Ministerio de Salud y Depeortes - Estado Plurinacional de Bolivia');
            $table->string('edicion', 64);
            $table->string('serie', 64);
            $table->string('nropublicacion');
            $table->string('lugarpublicacion', 64);
            $table->integer('orden');
            $table->timestamps();
            $table->integer('estado')->default(1);
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
