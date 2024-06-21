<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class PokemonGoldSilverQuizSeeder extends Seeder
{
    public function run()
    {
        $quiz = Quiz::firstOrCreate([
            'title' => 'Pokémon Gold/Silver Quiz',
            'description' => 'Test your knowledge about Pokémon Gold and Silver.',
            'created_by' => 1 
        ]);

        $questions = [
            'Who is the main protagonist in Pokémon Gold/Silver?' => [
                ['answer_text' => 'Ethan/Lyra', 'is_correct' => true],
                ['answer_text' => 'Red/Blue', 'is_correct' => false],
                ['answer_text' => 'Brendan/May', 'is_correct' => false],
                ['answer_text' => 'Lucas/Dawn', 'is_correct' => false],
            ],
            'What is the name of the region where Pokémon Gold/Silver is set?' => [
                ['answer_text' => 'Johto', 'is_correct' => true],
                ['answer_text' => 'Kanto', 'is_correct' => false],
                ['answer_text' => 'Hoenn', 'is_correct' => false],
                ['answer_text' => 'Sinnoh', 'is_correct' => false],
            ],
            'Who is the Champion of the Pokémon League in Gold/Silver?' => [
                ['answer_text' => 'Lance', 'is_correct' => true],
                ['answer_text' => 'Red', 'is_correct' => false],
                ['answer_text' => 'Blue', 'is_correct' => false],
                ['answer_text' => 'Steven', 'is_correct' => false],
            ],
            'What is the name of the first Gym Leader you face in Johto?' => [
                ['answer_text' => 'Falkner', 'is_correct' => true],
                ['answer_text' => 'Brock', 'is_correct' => false],
                ['answer_text' => 'Whitney', 'is_correct' => false],
                ['answer_text' => 'Jasmine', 'is_correct' => false],
            ],
            'Which Pokémon is known as the "Legendary Beast of Water"?' => [
                ['answer_text' => 'Suicune', 'is_correct' => true],
                ['answer_text' => 'Raikou', 'is_correct' => false],
                ['answer_text' => 'Entei', 'is_correct' => false],
                ['answer_text' => 'Lugia', 'is_correct' => false],
            ],
            'What item is used to evolve Poliwhirl into Politoed?' => [
                ['answer_text' => 'King\'s Rock', 'is_correct' => true],
                ['answer_text' => 'Water Stone', 'is_correct' => false],
                ['answer_text' => 'Sun Stone', 'is_correct' => false],
                ['answer_text' => 'Moon Stone', 'is_correct' => false],
            ],
            'Which city is home to the Goldenrod Radio Tower?' => [
                ['answer_text' => 'Goldenrod City', 'is_correct' => true],
                ['answer_text' => 'Ecruteak City', 'is_correct' => false],
                ['answer_text' => 'Olivine City', 'is_correct' => false],
                ['answer_text' => 'Violet City', 'is_correct' => false],
            ],
            'What is the name of the Legendary Pokémon that resides in the Whirl Islands?' => [
                ['answer_text' => 'Lugia', 'is_correct' => true],
                ['answer_text' => 'Ho-Oh', 'is_correct' => false],
                ['answer_text' => 'Celebi', 'is_correct' => false],
                ['answer_text' => 'Mewtwo', 'is_correct' => false],
            ],
            'Which item is needed to catch the Legendary Beasts?' => [
                ['answer_text' => 'Master Ball', 'is_correct' => true],
                ['answer_text' => 'Ultra Ball', 'is_correct' => false],
                ['answer_text' => 'Great Ball', 'is_correct' => false],
                ['answer_text' => 'Poké Ball', 'is_correct' => false],
            ],
            'What is the name of the town where the player begins their journey?' => [
                ['answer_text' => 'New Bark Town', 'is_correct' => true],
                ['answer_text' => 'Pallet Town', 'is_correct' => false],
                ['answer_text' => 'Littleroot Town', 'is_correct' => false],
                ['answer_text' => 'Twinleaf Town', 'is_correct' => false],
            ],
            'True or False: Lugia is known as the "Diving Pokémon".' => [
                ['answer_text' => 'True', 'is_correct' => false],
                ['answer_text' => 'False', 'is_correct' => true],
            ],
            'True or False: The Bug-Catching Contest is held in the National Park.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: The player can visit the Kanto region in Pokémon Gold/Silver.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: The move "Return" has higher power the less the Pokémon likes its Trainer.' => [
                ['answer_text' => 'True', 'is_correct' => false],
                ['answer_text' => 'False', 'is_correct' => true],
            ],
            'True or False: Red Gyarados can be found in the Dragon\'s Den.' => [
                ['answer_text' => 'True', 'is_correct' => false],
                ['answer_text' => 'False', 'is_correct' => true],
            ],
            'True or False: Whitney is known for using the move "Attract".' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: The Time Capsule allows players to trade Pokémon between different generations.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: The Ruins of Alph contain Unown puzzles.' => [
                ['answer_text' => 'True', 'is_correct' => true],
                ['answer_text' => 'False', 'is_correct' => false],
            ],
            'True or False: The Elite Four member Karen specializes in Steel-type Pokémon.' => [
                ['answer_text' => 'True', 'is_correct' => false],
                ['answer_text' => 'False', 'is_correct' => true],
            ],
            'True or False: Ho-Oh can be found in the Tin Tower.' => [
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
