<?php

use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembayaran')->insert([
            [

                'nama' => 'Bank Mandiri',
                'keterangan' => 'klasdjalsdknza',
                'jenis' => 'manual',
                'drive' => 'gojek',

            ]
        ]);
    }
}
