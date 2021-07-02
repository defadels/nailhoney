<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([ 
            [
                'nama' => 'Zaid',
                'email' => 'editor96@gmail.com',
                'hak_akses' => 'editor',
                'password' => Hash::make('editor123'),
            ]
        ]);
    
    }
}
