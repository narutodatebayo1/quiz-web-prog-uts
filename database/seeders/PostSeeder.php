<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Post::create([
            'subject_id' => 1,
            'user_id' => 1,
            'description' => $faker->realText,
            'image' => '/ml.jpg'
        ]);

        Post::create([
            'subject_id' => 2,
            'user_id' => 1,
            'description' => $faker->realText,
            'image' => '/dl.jpg'
        ]);
        Post::create([
            'subject_id' => 3,
            'user_id' => 1,
            'description' => $faker->realText,
            'image' => '/nlp.png'
        ]);

        Post::create([
            'subject_id' => 4,
            'user_id' => 2,
            'description' => $faker->realText,
            'image' => '/ss.jpg'
        ]);

        Post::create([
            'subject_id' => 5,
            'user_id' => 2,
            'description' => $faker->realText,
            'image' => '/na.jpg'
        ]);
        
        Post::create([
            'subject_id' => 6,
            'user_id' => 2,
            'description' => $faker->realText,
            'image' => '/pnt.jpg'
        ]);
    }
}
