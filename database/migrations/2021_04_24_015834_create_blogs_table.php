<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //para db relacional
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('titulo', 64);
            $table->string('imagen', 128)->nullable();
            $table->string('ext', 6)->nullable();
            $table->string('documentopdf', 128)->nullable();
            $table->string('youtube', 128)->nullable();
            $table->string('contenido', 3074);
            $table->string('autor', 64);
            $table->string('referencia', 64);
            $table->integer('estado')->default(1);
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
        Schema::dropIfExists('blog');
    }
}
