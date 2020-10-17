<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Libro;
use Faker\Generator as Faker;

$factory->define(Libro::class, function (Faker $faker) {
    return [
        //
        'titulo' => $faker->name,
        'fecha' => now(),
        'tapa' => $faker->text(5),
        'documentopdf' => $faker->text(5),
        'edicion' => $faker->text(5),
        'serie' => $faker->text(5),
        'nropublicacion' => $faker->numberBetween(1,10),
        'lugarpublicacion' => $faker->country,
    ];
});
