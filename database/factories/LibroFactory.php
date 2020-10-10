<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Libro;
use Faker\Generator as Faker;

$factory->define(Libro::class, function (Faker $faker) {
    return [
        //
        'titulo' => $faker->name,
        'tapa' => $faker->text(5),
        'documentopdf' => $faker->text(5),
    ];
});
