<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Nivel;
use Faker\Generator as Faker;

$factory->define(Nivel::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->text(128),
    ];
});
