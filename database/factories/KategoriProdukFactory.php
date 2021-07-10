<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\KategoriProduk;
use Faker\Generator as Faker;

$factory->define(KategoriProduk::class, function (Faker $faker) {
    return [
        'nama' => $faker->word,
        'keterangan' => $faker->sentence,
        'count' => $faker->randomDigit 
    ];
});
