<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Tipomarcador;
use Faker\Generator as Faker;

$factory->define(Tipomarcador::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->text(128)
    ];
});
