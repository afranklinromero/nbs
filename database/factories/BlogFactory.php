<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Blog;
use App\User;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        //
        'user_id' => User::all('id')->random(),
        'titulo' => $faker->text(32),
        'multimedia' => $faker->text(15),
        'contenido' => $faker->text(2048),
        'autor' => $faker->name(),
        'referencia' =>$faker->name(),
    ];
});
