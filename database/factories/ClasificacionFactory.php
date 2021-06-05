<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Clasificacion;
use App\Modelos\Concurso;
use App\User;
use Faker\Generator as Faker;

$factory->define(Clasificacion::class, function (Faker $faker) {
    return [
        //
        'concurso_id' => Concurso::all('id')->random(),
        'user_id' => User::all('id')->random(),
        'puntos' => $faker->numberBetween(0, 50),
    ];
});
