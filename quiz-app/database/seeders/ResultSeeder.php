<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Result;
use App\Models\User;
use App\Models\Quiz;

class ResultSeeder extends Seeder
{
    public function run()
    {
        $user = User::where('email', 'marco_p2009@live.it')->first();
        $quiz = Quiz::where('title', 'Final Fantasy 7 Saga Quiz')->first();

        if ($user && $quiz) {
            Result::create([
                'user_id' => $user->id,
                'quiz_id' => $quiz->id,
                'score' => 8, 
            ]);

            Result::create([
                'user_id' => $user->id,
                'quiz_id' => $quiz->id,
                'score' => 5, 
            ]);
        }
    }
}

