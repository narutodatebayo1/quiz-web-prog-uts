<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'subject_id' => 1,
            'user_id' => 1,
            'description' => 'desc1',
            'image' => '/ml.jpg'
        ]);

        Post::create([
            'subject_id' => 2,
            'user_id' => 1,
            'description' => 'desc2',
            'image' => '/dl.jpg'
        ]);
        Post::create([
            'subject_id' => 3,
            'user_id' => 1,
            'description' => 'desc3',
            'image' => '/nlp.png'
        ]);

        Post::create([
            'subject_id' => 4,
            'user_id' => 2,
            'description' => 'desc4',
            'image' => '/ss.jpg'
        ]);

        Post::create([
            'subject_id' => 5,
            'user_id' => 2,
            'description' => 'desc5',
            'image' => '/na.jpg'
        ]);
        Post::create([
            'subject_id' => 6,
            'user_id' => 2,
            'description' => 'desc6',
            'image' => '/pnt.jpg'
        ]);
    }
}
