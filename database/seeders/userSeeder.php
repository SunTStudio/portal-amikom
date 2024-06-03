<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nim' => '22.02.0001',
            'password' => 12345678,
        ]);
        User::create([
            'nim' => '22.02.0002',
            'password' => 12345678,
        ]);
        User::create([
            'nim' => '22.02.0003',
            'password' => 12345678,
        ]);
        User::create([
            'nim' => '22.02.0004',
            'password' => 12345678,
        ]);
    }
}
