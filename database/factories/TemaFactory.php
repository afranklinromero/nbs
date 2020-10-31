<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Tema;
use Faker\Generator as Faker;

$factory->define(Tema::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(128),
    ];
});
