<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcador', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //para db relacional
            $table->id();
            $table->bigInteger('libro_id')->unsigned();
            $table->bigInteger('padre_id')->unsigned();
            $table->bigInteger('tipomarcador_id')->unsigned();
            $table->string('numero', 16);
            $table->integer('nivel')->default(1);
            $table->integer('espadre')->default(1);
            $table->string('nombre', 256);
            $table->integer('pagina');
            $table->string('vistaprevia', 256);
            $table->timestamps();
            $table->integer('estado')->default(1);

            $table->foreign('libro_id')->references('id')->on('libro');
            $table->foreign('padre_id')->references('id')->on('libro');
            $table->foreign('tipomarcador_id')->references('id')->on('tipomarcador');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcador');
    }
}
