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
        DB::table('produk')->insert([
            [ 
            
                'foto' => '',
                'nama' => '',
                'deskripsi' => '',
                'asal_stok' => '',
            ],

            [
                'foto' => '',
                'nama' => '',
                'deskripsi' => '',
                'asal_stok' => '',
            ],

            [
                'foto' => '',
                'nama' => '',
                'deskripsi' => '',
                'asal_stok' => '',
            ]
        ]);
    }
}
