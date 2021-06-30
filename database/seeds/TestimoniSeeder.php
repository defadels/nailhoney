<?php

use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimoni')->insert([ 
            [
                'nama_konsumen' => 'Zaid',
                'isi_testimoni' => 'Madu ini asli dan bermanfaat',
                'foto' => '',
            ],
            
            [
                'nama_konsumen' => 'Fadhil',
                'isi_testimoni' => 'Madu ini menyembuhkan luka bakar saya',
                'foto' => '',
            ],

            [
                'nama_konsumen' => 'Aufatama',
                'isi_testimoni' => 'Madu ini menyembuhkan luka bakar saya',
                'foto' => '',
            ],

            [
                'nama_konsumen' => 'Dedi',
                'isi_testimoni' => 'Madu ini menyembuhkan luka bakar saya',
                'foto' => '',
            ]
        ]);
    }
}
