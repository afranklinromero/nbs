<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Pregunta;
use App\Modelos\Tema;
use Faker\Generator as Faker;

$factory->define(Pregunta::class, function (Faker $faker) {
    return [
        'tema_id' => 1,
        'user_id' => 2,
        'pregunta' => $faker->text(128),
    ];
});
