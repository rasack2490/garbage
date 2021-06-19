<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Testapi;
use Faker\Generator as Faker;

$factory->define(Testapi::class, function (Faker $faker) {
    return [
        //
        'nom' => $faker->sentence(1, true),
        'post'=> $faker->paragraphs(2, true)
    ];
});
