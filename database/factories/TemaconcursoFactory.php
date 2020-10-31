<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Concurso;
use App\Modelos\Tema;
use App\Modelos\Temaconcurso;
use Faker\Generator as Faker;

$factory->define(Temaconcurso::class, function (Faker $faker) {
    return [
        //
        'tema_id' => Tema::all('id')->random(),
        'concurso_id' => Concurso::all('id')->random(),
    ];
});
