<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Quiz;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quiz = Quiz::where('title', 'Final Fantasy 7 Saga Quiz')->first();

        $questions = [
            ['question_text' => 'Who is the main protagonist of Final Fantasy 7?', 'quiz_id' => $quiz->id],
            ['question_text' => 'What is the name of the main antagonist in Final Fantasy 7?', 'quiz_id' => $quiz->id],
            ['question_text' => 'What is the name of Cloud\'s iconic sword?', 'quiz_id' => $quiz->id],
            ['question_text' => 'Which character wields the weapon "Death Penalty"?', 'quiz_id' => $quiz->id],
            ['question_text' => 'What is the name of the powerful summon that requires the "Black Materia"?', 'quiz_id' => $quiz->id],
            ['question_text' => 'True or False: Aerith Gainsborough is a member of AVALANCHE.', 'quiz_id' => $quiz->id],
            ['question_text' => 'True or False: The city of Midgar is divided into eight sectors.', 'quiz_id' => $quiz->id],
            ['question_text' => 'True or False: The character Cid Highwind is a pilot.', 'quiz_id' => $quiz->id],
            ['question_text' => 'What is the name of the bar owned by Tifa Lockhart in Midgar?', 'quiz_id' => $quiz->id],
            ['question_text' => 'Which materia allows characters to summon Ifrit?', 'quiz_id' => $quiz->id],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
