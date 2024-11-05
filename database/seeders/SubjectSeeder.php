<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create([
            'category_id' => '1',
            'name' => 'Machine Learning'
        ]);

        Subject::create([
            'category_id' => '1',
            'name' => 'Deep Learning'
        ]);
        
        Subject::create([
            'category_id' => '1',
            'name' => 'Natural Language Processing'
        ]);

        Subject::create([
            'category_id' => '2',
            'name' => 'Software Security'
        ]);

        Subject::create([
            'category_id' => '2',
            'name' => ' Network Administration'
        ]);

        Subject::create([
            'category_id' => '2',
            'name' => 'Popular Network Technology'
        ]);
    }
}
