<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Nivel;
use App\Modelos\Nivelusuario;
use App\User;
use Faker\Generator as Faker;

$factory->define(Nivelusuario::class, function (Faker $faker) {
    return [
        //
        'nivel_id' => Nivel::all('id')->random(),
        'user_id' => User::all('id')->random(),
        'incorrectas' => $faker->numberBetween(0, 500),
        'correctas' => $faker->numberBetween(0, 500),
        'puntos' => $faker->numberBetween(0,500),
    ];
});
