<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            [
                'nama' => 'Home',
                'link' => 'alhafizh.id/home',
                'status' => 'aktif',
            ],

            [
                'nama' => 'Blog ',
                'link' => 'alhafizh.id/blog',
                'status' => 'nonaktif',
            ],

            [
                'nama' => 'Produk',
                'link' => 'alhafizh.id/produk',
                'status' => 'aktif',
            ],

            [
                'nama' => 'Kontak',
                'link' => 'alhafizh.id/kontak',
                'status' => 'aktif',
            ]
        ]);
    }
}
