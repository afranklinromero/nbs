<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Pregunta;
use App\Modelos\Respuesta;
use Faker\Generator as Faker;

$factory->define(Respuesta::class, function (Faker $faker) {
    return [
        //
        'pregunta_id' => Pregunta::all('id')->random(),
        'respuesta' => $faker->text(128),
        'escorrecto' => $faker->numberBetween(0, 1),
    ];
});


