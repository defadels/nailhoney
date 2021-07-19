<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TestimoniSeeder::class);
        $this->call(ProdukSeeder::class);
        $this->call(BlogSeeder::class);
        // $this->call(PelangganSeeder::class);
        $this->call(HalamanSeeder::class);
        $this->call(SpandukSeeder::class);
        $this->call(PembayaranSeeder::class);
        $this->call(PengirimanSeeder::class);
        $this->call(MenuSeeder::class);
    }
}
