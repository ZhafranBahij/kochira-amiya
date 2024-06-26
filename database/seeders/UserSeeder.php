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
        User::factory()->create([
            'name' => 'trueadmin',
            'email' => 'trueadmin@gmail.com',
            'password' => 'neotrueadmin123',
            'role' => 'true admin',
        ]);

        User::factory()->create([
            'name' => 'kirakira4141',
            'email' => 'kirakira4141@gmail.com',
            'password' => 'kirakira4141',
            'role' => 'admin',
        ]);
    }
}
