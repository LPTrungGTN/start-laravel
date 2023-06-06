<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(20)
            ->has(Blog::factory()->count(30))
            ->create();
        User::factory()
            ->count(13)
            ->has(Blog::factory()->count(8))
            ->create();
        User::factory()
            ->count(40)
            ->has(Blog::factory()->count(0))
            ->create();
    }
}
