<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\KategoriBlog;
use Faker\Generator as Faker;

$factory->define(KategoriBlog::class, function (Faker $faker) {
    return [
        'nama' => $faker->word,
        'keterangan' => $faker->sentence,
        'count' => $faker->randomDigit 
    ];
});
