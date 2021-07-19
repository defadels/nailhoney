<?php

use Illuminate\Database\Seeder;

class PengirimanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengiriman')->insert([
            [
                'nama' => 'JNE',
                'keterangan' => 'Pengiriman dengan jasa paket JNE',
                'status' => 'aktif',
            ],
            [
                'nama' => 'JNT',
                'keterangan' => 'Pengiriman dengan jasa paket JNT',
                'status' => 'nonaktif',
            ]
        ]);
    }
}
