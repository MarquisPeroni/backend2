<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class MetalGearSolid3QuizSeeder extends Seeder
{
    public function run()
    {
        // Creare il quiz
        $quiz = Quiz::create([
            'title' => 'Metal Gear Solid 3 Quiz',
            'description' => 'Test your knowledge about Metal Gear Solid 3.',
            'created_by' => 1 // Assicurati che questo ID utente esista
        ]);

        // Creare le domande e le risposte
        $questions = [
            'Who is the main protagonist of Metal Gear Solid 3?' => [
                ['answer_text' => 'Naked Snake', 'is_correct' => true],
                ['answer_text' => 'Solid Snake', 'is_correct' => false],
                ['answer_text' => 'Big Boss', 'is_correct' => false],
                ['answer_text' => 'Ocelot', 'is_correct' => false],
            ],
            'What is the name of the final boss in Metal Gear Solid 3?' => [
                ['answer_text' => 'The Boss', 'is_correct' => true],
                ['answer_text' => 'Volgin', 'is_correct' => false],
                ['answer_text' => 'The Sorrow', 'is_correct' => false],
                ['answer_text' => 'The End', 'is_correct' => false],
            ],
            'What is the code name of Naked Snake in the Virtuous Mission?' => [
                ['answer_text' => 'Operation Snake Eater', 'is_correct' => false],
                ['answer_text' => 'Operation Virtuous', 'is_correct' => false],
                ['answer_text' => 'Virtuous Snake', 'is_correct' => false],
                ['answer_text' => 'Naked Snake', 'is_correct' => true],
            ],
            'Which character is known for the phrase "I am The Pain"?' => [
                ['answer_text' => 'The Pain', 'is_correct' => true],
                ['answer_text' => 'The Fury', 'is_correct' => false],
                ['answer_text' => 'The Sorrow', 'is_correct' => false],
                ['answer_text' => 'The End', 'is_correct' => false],
            ],
            'What is the name of the Russian military unit led by Colonel Volgin?' => [
                ['answer_text' => 'GRU', 'is_correct' => true],
                ['answer_text' => 'KGB', 'is_correct' => false],
                ['answer_text' => 'Spetsnaz', 'is_correct' => false],
                ['answer_text' => 'SVR', 'is_correct' => false],
            ],
            'Who assists Naked Snake via radio with medical advice?' => [
                ['answer_text' => 'Para-Medic', 'is_correct' => true],
                ['answer_text' => 'Major Zero', 'is_correct' => false],
                ['answer_text' => 'Sigint', 'is_correct' => false],
                ['answer_text' => 'The Boss', 'is_correct' => false],
            ],
            'What is the name of the sniper battle between Naked Snake and The End?' => [
                ['answer_text' => 'The End Battle', 'is_correct' => false],
                ['answer_text' => 'Operation Snake Eater', 'is_correct' => false],
                ['answer_text' => 'The Snipe Hunt', 'is_correct' => false],
                ['answer_text' => 'The Boss Battle', 'is_correct' => true],
            ],
            'What is the special camouflage item you get after defeating The Fear?' => [
                ['answer_text' => 'Spider Camo', 'is_correct' => true],
                ['answer_text' => 'Snake Camo', 'is_correct' => false],
                ['answer_text' => 'Tuxedo', 'is_correct' => false],
                ['answer_text' => 'Leaf Camo', 'is_correct' => false],
            ],
            'What is the name of the weaponized AI in Metal Gear Solid 3?' => [
                ['answer_text' => 'The Shagohod', 'is_correct' => true],
                ['answer_text' => 'Metal Gear REX', 'is_correct' => false],
                ['answer_text' => 'Metal Gear RAY', 'is_correct' => false],
                ['answer_text' => 'Arsenal Gear', 'is_correct' => false],
            ],
            'What is the codename given to the final mission Naked Snake undertakes?' => [
                ['answer_text' => 'Operation Snake Eater', 'is_correct' => true],
                ['answer_text' => 'Virtuous Mission', 'is_correct' => false],
                ['answer_text' => 'Operation Virtuous', 'is_correct' => false],
                ['answer_text' => 'Operation End', 'is_correct' => false],
            ],
        ];

        foreach ($questions as $questionText => $answers) {
            $question = Question::create([
                'quiz_id' => $quiz->id,
                'question_text' => $questionText,
            ]);

            foreach ($answers as $answer) {
                Answer::create([
                    'question_id' => $question->id,
                    'answer_text' => $answer['answer_text'],
                    'is_correct' => $answer['is_correct'],
                ]);
            }
        }
    }
}
