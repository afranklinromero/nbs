<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivelusuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivelusuario', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //para db relacional
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('nivel_id')->unsigned();
            $table->integer('correctas')->default(0);
            $table->integer('incorrectas')->default(0);
            $table->integer('puntos')->default(0);
            $table->timestamps();
            $table->integer('estado')->default(1);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('nivel_id')->references('id')->on('nivel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nivelusuario');
    }
}
