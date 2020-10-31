<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Concurso;
use App\Modelos\Inscripcion;
use App\User;
use Faker\Generator as Faker;

$factory->define(Inscripcion::class, function (Faker $faker) {
    return [
        //
        'concurso_id' => Concurso::all('id')->random(),
        'user_id' => User::all('id')->random(),
    ];
});
