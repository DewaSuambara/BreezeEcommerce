<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@mail.com',
        //     'password' => bcrypt('password')
        // ]);

        User::create([
            'name' => 'Agus',
            'email' => 'agus@mail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Ayu',
            'email' => 'ayu@mail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Anto',
            'email' => 'anto@mail.com',
            'password' => bcrypt('password')
        ]);
    }
}
