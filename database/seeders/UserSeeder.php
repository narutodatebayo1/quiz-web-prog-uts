<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sasa',
            'specialty' => 'Data Science',
            'image' => '/p1.jpg'
        ]);

        User::create([
            'name' => 'Sisi',
            'specialty' => 'Network Security',
            'image' => '/p2.jpg'
        ]);
    }
}
