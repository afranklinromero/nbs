<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicidad', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //para db relacional
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('imagen', 64);
            $table->string('ext', 6);
            $table->string('titulo', 64);
            $table->string('contenido', 3074);
            $table->string('link', 128);
            $table->string('lugar', 128);
            $table->integer('estado')->default(1);
            $table->timestamp('fechaini')->default(now());
            $table->timestamp('fechafin')->default(now());
            $table->timestamps();

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
        Schema::dropIfExists('publicidad');
    }
}
