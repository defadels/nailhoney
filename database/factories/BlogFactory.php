<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'judul' => $faker->words(5, true),
        'abstrak' => $faker->paragraph(1, true),
        'konten' => $faker->paragraphs(5, true) ,
        'penulis' => $faker->name,
        'foto' => $faker->imageUrl(320, 480),
        'thumbnail' => $faker->imageUrl(200, 250),
        'keyword' => $faker->sentence(3, true),
        'slug' => $faker->slug,
        'status' => $faker->randomElement(['aktif', 'nonaktif'])
    ];
});
