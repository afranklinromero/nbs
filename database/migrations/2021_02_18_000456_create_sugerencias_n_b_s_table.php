<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSugerenciasNBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sugerenciasnbs', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //para db relacional
            $table->id();
            //$table->bigInteger('user_id')->unsigned();
            $table->string('name', 32);
            $table->string('email', 64);
            $table->string('subject', 128);
            $table->string('content', 512);
            $table->integer('estado')->default(1);
            $table->timestamps();

            //$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sugerenciasnbs');
    }
}
