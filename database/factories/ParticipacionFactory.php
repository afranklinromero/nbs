<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Concurso;
use App\Modelos\Participacion;
use App\User;
use Faker\Generator as Faker;

$factory->define(Participacion::class, function (Faker $faker) {
    return [
        //
        'concurso_id' => Concurso::all('id')->random(),
        'user_id' => User::all('id')->random(),
        'respuestascorrectas' => $faker->numberBetween(0,10),
        'puntos' => $faker->numberBetween(0,10),
    ];
});
