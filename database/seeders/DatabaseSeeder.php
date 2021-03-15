<?php

namespace Database\Seeders;

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
        $this->call(LoaiTableSeeder::class);
        $this->call(SanphamTableSeeder::class);
        $this->call(KhachhangTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
