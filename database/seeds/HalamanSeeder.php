<?php

use Illuminate\Database\Seeder;

class HalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('halaman')->insert([
        [
            'judul' => 'Cara Bayar',
            'link' => 'alhafizh.id/carabayar',
            'status' => 'draft',
        ],
        
        [
            'judul' => 'Madu Alhafizh',
            'link' => 'alhafish.id/madu',
            'status' => 'published',
        ],

        [
            'judul' => 'Rekening',
            'link' => 'alhafizh.id/rekening',
            'status' => 'draft',  
        ]
        
        ]);
    }
}
