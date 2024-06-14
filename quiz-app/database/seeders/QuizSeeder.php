<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::create([
            'title' => 'Final Fantasy 7 Saga Quiz',
            'description' => 'A quiz about the Final Fantasy 7 saga.',
            'created_by' => 1, 
        ]);
    }
}

