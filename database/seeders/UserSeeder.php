<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

final class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Only run in non-production environments
        if (app()->environment('production')) {
            return;
        }

        // Create admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        // Create 10 regular users with fake names but predictable emails
        for ($i = 1; $i <= 10; $i++) {
            User::factory()->create([
                'email' => "user{$i}@example.com",
                'is_admin' => false,
            ]);
        }
    }
}
