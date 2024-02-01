<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Create random posts
        for ($i = 0; $i < 10; $i++) {
            Post::create([
                'user_id'=>User::inRandomOrder()->first()->id,
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        } 

    }
}
