<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modelos\Autor;
use Faker\Generator as Faker;

$factory->define(Autor::class, function (Faker $faker) {
    return [
        //
        'nombres' => $faker->firstname,
        'apellidos' => $faker->lastname,
        'correo' => $faker->email,
    ];
});
