<?php

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat 10 kategori produk
        factory(App\KategoriProduk::class, 10)->create()->each(function ($kategori) {

            // Setiap kategori punya 10 blog
            $daftar_produk = factory(App\Produk::class, 10)->make();
            $kategori->daftar_produk()->saveMany($daftar_produk);
        });
        // $daftar_produk = factory(App\Produk::class, 10)->create();
    }
}
