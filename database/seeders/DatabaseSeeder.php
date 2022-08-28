<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'role' => 'admin',
                'password' => bcrypt('admin123'),
            ],
            [
                'name' => 'User',
                'email' => 'user@mail.com',
                'role' => 'user',
                'password' => bcrypt('user123'),
            ],
        ]);
    }
}
