<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin123'),
            'status' => '1'
        ]);

        User::factory()->create([
            'name' => 'Commercial',
            'email' => 'commercial@email.com',
            'password' => Hash::make('commercial123'),
            'status' => '2'
        ]);

        User::factory()->create([
            'name' => 'Operational',
            'email' => 'operational@email.com',
            'password' => Hash::make('operational123'),
            'status' => '3'
        ]);
    }
}
