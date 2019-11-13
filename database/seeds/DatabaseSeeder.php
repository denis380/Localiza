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
        DB::table('users')->insert([
            'name' => 'denis',
            'email' => 'denis380@gmail.com',
            'password' => bcrypt('Fiesta@01'),
        ]);
    }
}
