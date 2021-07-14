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
                'link' => 'alhafizh.id/carabayar',
                'status' => 'draft',
            ]
            
            ]);
    }
}
