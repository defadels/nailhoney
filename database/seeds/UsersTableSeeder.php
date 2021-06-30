<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ 
        [
            'nama' => 'Zaid',
            'email' => 'editor96@gmail.com',
            'hak_akses' => 'editor',
            'password' => Hash::make('editor123'),
        ],
        
        [
            'nama' => 'Fadhil',
            'email' => 'admin26@gmail.com',
            'hak_akses' => 'admin',
            'password' => Hash::make('admin123'),
        ]
    ]);

    $users = factory(App\User::class, 100)->create();

    }
}
