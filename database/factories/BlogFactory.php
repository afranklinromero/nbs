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
        'imagen' => $faker->text(16) . '.png',
        'ext' => 'png',
        'documentopdf' => $faker->text(15),
        //'youtube' => $faker->url,
        'contenido' => $faker->text(2048),
        'autor' => $faker->name(),
        'referencia' =>$faker->name(),
    ];
});
