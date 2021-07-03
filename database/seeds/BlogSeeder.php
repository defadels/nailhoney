<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat 10 kategori blog
        factory(App\KategoriBlog::class, 10)->create()->each(function ($kategori) {

            // Setiap kategori punya 10 blog
            $daftar_blog = factory(App\Blog::class, 10)->make();
            $kategori->daftar_blog()->saveMany($daftar_blog);
        });
        // $daftar_blog = factory(App\Blog::class, 10)->create();
    }
}
