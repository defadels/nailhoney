<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Halaman;
use Faker\Generator as Faker;

$factory->define(Halaman::class, function (Faker $faker) {
    return [
        'judul' => $faker->words(4, true),
        'konten' => $faker->paragraphs(5, true),
        'slug' => $faker->slug,
        'foto' => $faker->imageUrl(320, 480),
        'link' => $faker->words(4, true),
        'keyword' => $faker->sentence(3, true),
        'deskripsi' => $faker->paragraph(1, true),
        'status' => $faker-> randomElement(['draft', 'published']),
    ];
});
