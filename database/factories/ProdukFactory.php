<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produk;
use Faker\Generator as Faker;

$factory->define(Produk::class, function (Faker $faker) {
    return [
        'foto' => $faker->imageUrl(320, 480),
        'nama' => $faker->words(2, true),
        'konten' => $faker->paragraph(1, true),
        'slug' => $faker->words(2, true),
        'harga' => $faker->randomNumber(1, true),
        'komisi' => $faker->randomNumber(1, true),
        'satuan' => $faker->word(1, true),
        'keyword' => $faker->word(1, true),
        'deskripsi' => $faker->paragraph(1, true),
    ];
});
