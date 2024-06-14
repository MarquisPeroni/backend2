<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            'Who is the main protagonist of Final Fantasy 7?' => [
                ['answer_text' => 'Cloud Strife', 'is_correct' => true],
                ['answer_text' => 'Tifa Lockhart', 'is_correct' => false],
                ['answer_text' => 'Aerith Gainsborough', 'is_correct' => false],
                ['answer_text' => 'Barret Wallace', 'is_correct' => false],
            ],
            'What is the name of the main antagonist in Final Fantasy 7?' => [
                ['answer_text' => 'Sephiroth', 'is_correct' => true],
                ['answer_text' => 'Rufus Shinra', 'is_correct' => false],
                ['answer_text' => 'Hojo', 'is_correct' => false],
                ['answer_text' => 'Scarlet', 'is_correct' => false],
            ],
            'What is the name of Cloud\'s iconic sword?' => [
                ['answer_text' => 'Gunblade', 'is_correct' => false],
                ['answer_text' => 'Excalibur', 'is_correct' => false],
                ['answer_text' => 'Buster Sword', 'is_correct' => true],
                ['answer_text' => 'Ragnarok', 'is_correct' => false],
            ],
            'Which character wields the weapon "Death Penalty"?' => [
                ['answer_text' => 'Vincent Valentine', 'is_correct' => true],
                ['answer_text' => 'Red XIII', 'is_correct' => false],
                ['answer_text' => 'Cid Highwind', 'is_correct' => false],
                ['answer_text' => 'Yuffie Kisaragi', 'is_correct' => false],
            ],
            'What is the name of the powerful summon that requires the "Black Materia"?' => [
                ['answer_text' => 'Bahamut', 'is_correct' => false],
                ['answer_text' => 'Knights of the Round', 'is_correct' => false],
                ['answer_text' => 'Ultima', 'is_correct' => false],
                ['answer_text' => 'Meteor', 'is_correct' => true],
            ],
            'True or False: Aerith Gainsborough is a member of AVALANCHE.' => [
                ['answer_text' => 'True', 'is_correct' => false],
                ['answer_text' => 'False', 'is_correct' => true],
            ],
            'True or False: The city of Midgar is divided into eight sectors.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: The character Cid Highwind is a pilot.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'What is the name of the bar owned by Tifa Lockhart in Midgar?' => [
                ['answer_text' => 'Seventh Heaven', 'is_correct' => true],
                ['answer_text' => 'Honey Bee Inn', 'is_correct' => false],
                ['answer_text' => 'Gold Saucer', 'is_correct' => false],
                ['answer_text' => 'Turtle\'s Paradise', 'is_correct' => false],
            ],
            'Which materia allows characters to summon Ifrit?' => [
                ['answer_text' => 'Red Materia', 'is_correct' => true],
                ['answer_text' => 'Blue Materia', 'is_correct' => false],
                ['answer_text' => 'Green Materia', 'is_correct' => false],
                ['answer_text' => 'Yellow Materia', 'is_correct' => false],
            ],
        ];

        foreach ($questions as $questionText => $answers) {
            $question = Question::where('question_text', $questionText)->first();
            if ($question) {
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
}

