<?php

use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggan')->insert([
        [
            'nama' => 'Fadhil',
            'nohp' => '082273318016',
            'email' => 'fadhiladhaa26@gmail.com',
            'password' => Hash::make('fadhiladha'),
        ],

        [
            'nama' => 'Zaid',
            'nohp' => '081376490300',
            'email' => 'zaidabd@gmail.com',
            'password' => Hash::make('zaidabd'),
        ],

        [
            'nama' => 'Aufatama',
            'nohp' => '08223365540',
            'email' => 'aufatama@gmail.com',
            'password' => Hash::make('ari'),
        ]
        
        ]);
    }
}
