<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a specific test user first
        $testUser = User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password'),
            ]
        );
        
        // Create posts for the test user
        if ($testUser->posts()->count() === 0) {
            Post::factory()->count(3)->for($testUser)->create();
        }

        // Create additional random users and their posts
        // Use firstOrCreate to avoid duplicate email issues
        for ($i = 0; $i < 3; $i++) {
            $user = User::factory()->create();
            Post::factory()->count(5)->for($user)->create();
        }
    }
}