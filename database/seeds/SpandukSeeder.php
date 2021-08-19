<?php

use Illuminate\Database\Seeder;

class SpandukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spanduk')->insert([
            [
                'foto' => '',
                'judul' => 'Cara Bayar',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'link' => 'alhafizh.id/carabayar',
                'label_tombol' => 'label-label-label',
                'warna_tulisan' => '#000',
                'status' => 'nonaktif',
            ]
            
            ]);
    }
}
