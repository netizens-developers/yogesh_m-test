<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'first_name' => 'Manage1',
            'last_name' => 'User',
            'email' => 'manage1@example.com',
            'password' => Hash::make('123456789'),
            'role' => 'management'
        ]);
        \App\Models\User::factory()->create([
            'first_name' => 'Manage2',
            'last_name' => 'User',
            'email' => 'manage2@example1.com',
            'password' => Hash::make('123456789'),
            'role' => 'management'
        ]);
        \App\Models\User::factory()->create([
            'first_name' => 'staff1',
            'last_name' => 'User',
            'email' => 'staff1@example1.com',
            'password' => Hash::make('123456789'),
            'role' => 'staff'
        ]);
        \App\Models\User::factory()->create([
            'first_name' => 'staff2',
            'last_name' => 'User',
            'email' => 'staff2@example1.com',
            'password' => Hash::make('123456789'),
            'role' => 'staff'
        ]);
        \App\Models\User::factory()->create([
            'first_name' => 'staff3',
            'last_name' => 'User',
            'email' => 'staff3@example1.com',
            'password' => Hash::make('123456789'),
            'role' => 'staff'
        ]);
        \App\Models\User::factory()->create([
            'first_name' => 'staff4',
            'last_name' => 'User',
            'email' => 'staff4@example1.com',
            'password' => Hash::make('123456789'),
            'role' => 'staff'
        ]);
        \App\Models\User::factory()->create([
            'first_name' => 'staff5',
            'last_name' => 'User',
            'email' => 'staff5@example1.com',
            'password' => Hash::make('123456789'),
            'role' => 'staff'
        ]);
    }
}
