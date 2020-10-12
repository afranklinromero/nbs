<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Autor;
use App\Autorlibro;
use App\Libro;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Autorlibro::class, function (Faker $faker) {
    return [
        //
        'autor_id' => Autor::all('id')->random(),
        'libro_id' => Libro::all('id')->random(),
    ];
});
