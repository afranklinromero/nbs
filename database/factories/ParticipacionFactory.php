<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Concurso;
use App\Modelos\Participacion;
use App\User;
use Faker\Generator as Faker;

$factory->define(Participacion::class, function (Faker $faker) {
    $correctas = $faker->numberBetween(0,10);
    $incorrectas = 10 - $correctas;
    $minutos = 0;
    $segundos = $faker->numberBetween(0,59);
    return [
        //
        'concurso_id' => Concurso::all('id')->random(),
        'user_id' => User::all('id')->random(),
        'tiempo' => $minutos.':'.$segundos,
        'incorrectas' => $incorrectas,
        'correctas' => $correctas,
        'puntos' => $faker->numberBetween(0,10),
    ];
});
