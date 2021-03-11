<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Concurso;
use App\Modelos\Configuracion;
use App\User;
use Faker\Generator as Faker;

$factory->define(Concurso::class, function (Faker $faker) {
    return [
        //
        'configuracion_id' => Configuracion::all('id')->random(),
        'user_id' => User::all('id')->random(),
        'nombre' => $faker->text(128),
        'fechaini' => now(),
        'fechafin' => now(),
    ];
});
