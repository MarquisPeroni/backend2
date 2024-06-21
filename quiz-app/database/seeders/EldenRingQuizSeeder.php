<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EldenRingQuizSeeder extends Seeder
{
    public function run()
    {
        $quiz = Quiz::firstOrCreate([
            'title' => 'Elden Ring Quiz',
            'description' => 'Test your knowledge about Elden Ring.',
            'created_by' => 1 
        ]);

        $questions = [
            'Who is the main protagonist of Elden Ring?' => [
                ['answer_text' => 'The Tarnished', 'is_correct' => true],
                ['answer_text' => 'The Ashen One', 'is_correct' => false],
                ['answer_text' => 'The Unkindled', 'is_correct' => false],
                ['answer_text' => 'The Chosen Undead', 'is_correct' => false],
            ],
            'Who is the main antagonist in Elden Ring?' => [
                ['answer_text' => 'The Elden Beast', 'is_correct' => true],
                ['answer_text' => 'Gwyn, Lord of Cinder', 'is_correct' => false],
                ['answer_text' => 'Ornstein and Smough', 'is_correct' => false],
                ['answer_text' => 'Manus, Father of the Abyss', 'is_correct' => false],
            ],
            'What is the name of the starting area in Elden Ring?' => [
                ['answer_text' => 'The Lands Between', 'is_correct' => true],
                ['answer_text' => 'Drangleic', 'is_correct' => false],
                ['answer_text' => 'Lordran', 'is_correct' => false],
                ['answer_text' => 'Yharnam', 'is_correct' => false],
            ],
            'What is the primary objective of the player in Elden Ring?' => [
                ['answer_text' => 'Become Elden Lord', 'is_correct' => true],
                ['answer_text' => 'Link the Fire', 'is_correct' => false],
                ['answer_text' => 'Defeat the Old Hunters', 'is_correct' => false],
                ['answer_text' => 'Escape the Nightmare', 'is_correct' => false],
            ],
            'Who assists the player in the Roundtable Hold?' => [
                ['answer_text' => 'Melina', 'is_correct' => true],
                ['answer_text' => 'Ranni', 'is_correct' => false],
                ['answer_text' => 'Blaidd', 'is_correct' => false],
                ['answer_text' => 'Fia', 'is_correct' => false],
            ],
            'What is the name of the sorcery academy in Elden Ring?' => [
                ['answer_text' => 'Raya Lucaria Academy', 'is_correct' => true],
                ['answer_text' => 'Vinheim Dragon School', 'is_correct' => false],
                ['answer_text' => 'Big Hat Logan\'s School', 'is_correct' => false],
                ['answer_text' => 'School of Griggs', 'is_correct' => false],
            ],
            'What item is needed to unlock areas sealed by magic?' => [
                ['answer_text' => 'Stonesword Key', 'is_correct' => true],
                ['answer_text' => 'Lodestone', 'is_correct' => false],
                ['answer_text' => 'Runestone', 'is_correct' => false],
                ['answer_text' => 'Moonlight Key', 'is_correct' => false],
            ],
            'Which boss is known as the "First Elden Lord"?' => [
                ['answer_text' => 'Godfrey', 'is_correct' => true],
                ['answer_text' => 'Radahn', 'is_correct' => false],
                ['answer_text' => 'Malenia', 'is_correct' => false],
                ['answer_text' => 'Mogh', 'is_correct' => false],
            ],
            'What is the name of the massive tree that dominates the landscape?' => [
                ['answer_text' => 'Erdtree', 'is_correct' => true],
                ['answer_text' => 'Great Hollow', 'is_correct' => false],
                ['answer_text' => 'Ancient Tree', 'is_correct' => false],
                ['answer_text' => 'World Tree', 'is_correct' => false],
            ],
            'Which character is known for wielding the weapon "Rivers of Blood"?' => [
                ['answer_text' => 'Bloody Finger Okina', 'is_correct' => true],
                ['answer_text' => 'Maliketh', 'is_correct' => false],
                ['answer_text' => 'Malenia', 'is_correct' => false],
                ['answer_text' => 'Patches', 'is_correct' => false],
            ],
            'True or False: The world of Elden Ring was created by Hidetaka Miyazaki and George R. R. Martin.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: The player can summon spirits to aid in battles in Elden Ring.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: Elden Ring features an open-world environment.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: There are multiple endings in Elden Ring.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: Elden Ring is developed by FromSoftware.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: The player character in Elden Ring is known as the Ashen One.' => [
                ['answer_text' => 'True', 'is_correct' => false],
                ['answer_text' => 'False', 'is_correct' => true],
            ],
            'True or False: Torrent is the name of the player\'s horse in Elden Ring.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: The player can equip up to four rings at a time in Elden Ring.' => [
                ['answer_text' => 'True', 'is_correct' => false],
                ['answer_text' => 'False', 'is_correct' => true],
            ],
            'True or False: Elden Ring is set in the same universe as Dark Souls.' => [
                ['answer_text' => 'True', 'is_correct' => false],
                ['answer_text' => 'False', 'is_correct' => true],
            ],
            'True or False: The Great Runes are key items in Elden Ring.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
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
