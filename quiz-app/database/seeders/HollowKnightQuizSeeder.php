<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class HollowKnightQuizSeeder extends Seeder
{
    public function run()
    {
        // Creare il quiz se non esiste
        $quiz = Quiz::firstOrCreate([
            'title' => 'Hollow Knight Quiz',
            'description' => 'Test your knowledge about Hollow Knight.',
            'created_by' => 1 // Assicurati che questo ID utente esista
        ]);

        // Creare le domande e le risposte
        $questions = [
            'Who is the main protagonist in Hollow Knight?' => [
                ['answer_text' => 'The Knight', 'is_correct' => true],
                ['answer_text' => 'The Hollow Knight', 'is_correct' => false],
                ['answer_text' => 'The Pale King', 'is_correct' => false],
                ['answer_text' => 'The Dreamer', 'is_correct' => false],
            ],
            'What is the main currency used in Hollow Knight?' => [
                ['answer_text' => 'Geo', 'is_correct' => true],
                ['answer_text' => 'Souls', 'is_correct' => false],
                ['answer_text' => 'Rupees', 'is_correct' => false],
                ['answer_text' => 'Credits', 'is_correct' => false],
            ],
            'Which character is the final boss of the base game?' => [
                ['answer_text' => 'The Hollow Knight', 'is_correct' => true],
                ['answer_text' => 'Hornet', 'is_correct' => false],
                ['answer_text' => 'The Radiance', 'is_correct' => false],
                ['answer_text' => 'The Pale King', 'is_correct' => false],
            ],
            'What is the name of the starting area in Hollow Knight?' => [
                ['answer_text' => 'Dirtmouth', 'is_correct' => true],
                ['answer_text' => 'Greenpath', 'is_correct' => false],
                ['answer_text' => 'The Abyss', 'is_correct' => false],
                ['answer_text' => 'Crystal Peak', 'is_correct' => false],
            ],
            'Which ability allows The Knight to dash forward?' => [
                ['answer_text' => 'Mothwing Cloak', 'is_correct' => true],
                ['answer_text' => 'Shade Cloak', 'is_correct' => false],
                ['answer_text' => 'Crystal Heart', 'is_correct' => false],
                ['answer_text' => 'Monarch Wings', 'is_correct' => false],
            ],
            'What is the main hub area in Hollow Knight?' => [
                ['answer_text' => 'Dirtmouth', 'is_correct' => true],
                ['answer_text' => 'Hallownest', 'is_correct' => false],
                ['answer_text' => 'Fog Canyon', 'is_correct' => false],
                ['answer_text' => 'King\'s Pass', 'is_correct' => false],
            ],
            'Which character helps The Knight upgrade their Nail?' => [
                ['answer_text' => 'Nailsmith', 'is_correct' => true],
                ['answer_text' => 'Sly', 'is_correct' => false],
                ['answer_text' => 'Elderbug', 'is_correct' => false],
                ['answer_text' => 'Cornifer', 'is_correct' => false],
            ],
            'What is the purpose of the Dream Nail?' => [
                ['answer_text' => 'To collect Essence', 'is_correct' => true],
                ['answer_text' => 'To teleport', 'is_correct' => false],
                ['answer_text' => 'To heal', 'is_correct' => false],
                ['answer_text' => 'To dash', 'is_correct' => false],
            ],
            'Who is the ruler of Hallownest?' => [
                ['answer_text' => 'The Pale King', 'is_correct' => true],
                ['answer_text' => 'The White Lady', 'is_correct' => false],
                ['answer_text' => 'The Radiance', 'is_correct' => false],
                ['answer_text' => 'The Hollow Knight', 'is_correct' => false],
            ],
            'Which item allows The Knight to swim in acid?' => [
                ['answer_text' => 'Isma\'s Tear', 'is_correct' => true],
                ['answer_text' => 'King\'s Brand', 'is_correct' => false],
                ['answer_text' => 'Lifeblood Core', 'is_correct' => false],
                ['answer_text' => 'Void Heart', 'is_correct' => false],
            ],
            'True or False: The Knight can only equip one Charm at a time.' => [
                ['answer_text' => 'True', 'is_correct' => false],
                ['answer_text' => 'False', 'is_correct' => true],
            ],
            'True or False: The Colosseum of Fools is a combat challenge area in Hollow Knight.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: Hornet is the daughter of the Pale King and Herrah the Beast.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: The Hollow Knight is the final boss of the Godmaster DLC.' => [
                ['answer_text' => 'True', 'is_correct' => false],
                ['answer_text' => 'False', 'is_correct' => true],
            ],
            'True or False: The Knight can collect Soul to heal themselves.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: The White Palace is an optional area in Hollow Knight.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: The Radiance is a benevolent entity in Hollow Knight.' => [
                ['answer_text' => 'True', 'is_correct' => false],
                ['answer_text' => 'False', 'is_correct' => true],
            ],
            'True or False: The Knight can find map pieces throughout Hallownest.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: The Grimm Troupe is a peaceful group in Hollow Knight.' => [
                ['answer_text' => 'True', 'is_correct' => false],
                ['answer_text' => 'False', 'is_correct' => true],
            ],
            'True or False: Zote the Mighty is a powerful ally in Hollow Knight.' => [
                ['answer_text' => 'True', 'is_correct' => false],
                ['answer_text' => 'False', 'is_correct' => true],
            ],
        ];

        foreach ($questions as $questionText => $answers) {
            $question = Question::firstOrCreate([
                'quiz_id' => $quiz->id,
                'question_text' => $questionText,
            ]);

            foreach ($answers as $answer) {
                Answer::firstOrCreate([
                    'question_id' => $question->id,
                    'answer_text' => $answer['answer_text'],
                    'is_correct' => $answer['is_correct'],
                ]);
            }
        }
    }
}
