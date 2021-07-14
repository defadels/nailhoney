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
            'konten' => 'ini adlaah konten cara bayar',
            'slug' => 'slug cara bayar',
            'foto' => 'alhafizh.id/carabayar',
            'link' => 'alhafizh.id/carabayar',
            'keyword' => 'carabayar',
            'deskripsi' => 'ini adalah deskripsi carabayar',
            'status' => 'draft',
        ],
        
        [
            'judul' => 'Rekening',
            'konten' => 'ini adlaah konten rekening',
            'slug' => 'slug cara rekening',
            'foto' => 'alhafizh.id/rekening',
            'link' => 'alhafizh.id/rekening',
            'keyword' => 'rekening',
            'deskripsi' => 'ini adalah deskripsi deskripsi',
            'status' => 'draft',
        ]
        
        ]);

        $halaman = factory(App\Halaman::class, 10)->create();
    
    }
}
