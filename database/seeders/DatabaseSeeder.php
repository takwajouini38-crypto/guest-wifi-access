<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed Guests
        DB::table('guests')->insert([
            [
                'prenom' => 'Takoua',
                'name' => 'Jouini',
                'email' => 'takoua@example.com',
                'phone' => '+21612345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'prenom' => 'Ali',
                'name' => 'Ben Ahmed',
                'email' => 'ali@example.com',
                'phone' => '+21687654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Seed Employees
        DB::table('employees')->insert([
            [
                'prenom' => 'Sami',
                'name' => 'Trabelsi',
                'email' => 'sami@example.com',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'prenom' => 'Mouna',
                'name' => 'Hassine',
                'email' => 'mouna@example.com',
                'role' => 'technician',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

