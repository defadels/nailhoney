<?php

use Illuminate\Database\Seeder;

class AlamatUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alamat_user')->insert([
            [
                'pelanggan_id' => 2,
                'label' => 'tes',
                'is_default' => 'ya',
                'nama_penerima' => 'Fadhil',
                'nomor_hp_penerima' => '082273318016',
                'alamat_penerima' => 'Jl. Karya Gang ',
            ]
        ]);
    }
}
