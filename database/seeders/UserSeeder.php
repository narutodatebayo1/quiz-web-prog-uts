<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        User::create([
            'name' => $faker->name,
            'specialty' => 'Data Science',
            'image' => '/p1.jpg'
        ]);

        User::create([
            'name' => $faker->name,
            'specialty' => 'Network Security',
            'image' => '/p2.jpg'
        ]);
    }
}
