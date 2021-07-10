<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produk;
use Faker\Generator as Faker;

$factory->define(Produk::class, function (Faker $faker) {
    return [
        'foto_produk' => $faker->imageUrl(320, 480),
        'nama_produk' => $faker->words(5, true),
        'deskripsi_produk' => $faker->paragraph(1, true),
    ];
});
