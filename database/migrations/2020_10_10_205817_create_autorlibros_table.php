<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorlibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorlibro', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //para db relacional
            $table->id();
            $table->bigInteger('libro_id')->unsigned();
            $table->bigInteger('autor_id')->unsigned();
            $table->timestamps();
            $table->integer('estado')->default(1);

            $table->foreign('libro_id')->references('id')->on('libro');
            $table->foreign('autor_id')->references('id')->on('autor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autorlibro');
    }
}
