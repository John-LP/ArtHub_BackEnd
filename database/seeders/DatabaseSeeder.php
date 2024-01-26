<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Artwork::factory(20)->create();
        \App\Models\Comment::factory(50)->create();
        \App\Models\Like::factory(30)->create();
        \App\Models\Mention::factory(15)->create();
    }
}
