<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modelos\Autor;
use App\Modelos\Libro;
use App\Modelos\Autorlibro;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Autorlibro::class, function (Faker $faker) {
    return [
        //
        'autor_id' => Autor::all('id')->random(),
        'libro_id' => Libro::all('id')->random(),
    ];
});
