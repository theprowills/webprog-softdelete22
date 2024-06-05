<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'username' => 'har',
            'email' => 'har@gmail.com',
            'password' => '12345678',
            'role' => 'admin'
        ]);

        User::create([
            'username' => 'pet',
            'email' => 'pet@gmail.com',
            'password' => '12345678',
            'role' => 'admin'
        ]);

        User::create([
            'username' => 'a',
            'email' => 'a@gmail.com',
            'password' => '12345678',
            'role' => 'admin'
        ]);
    }
}
