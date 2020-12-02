<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Busqueda;
use Faker\Generator as Faker;

$factory->define(Busqueda::class, function (Faker $faker) {
    return [
        //
        'frase' => $faker->text(32),
        'frecuencia' => $faker->numberBetween(1, 5),
    ];
});
