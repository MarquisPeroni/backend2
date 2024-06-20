<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Question;
use App\Models\Answer;

class AddTifaLockhartAnswerToAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $question = Question::where('question_text', 'Who is the main protagonist of Final Fantasy 7?')->first();
        if ($question) {
            Answer::updateOrCreate(
                [
                    'question_id' => $question->id,
                    'answer_text' => 'Tifa Lockhart'
                ],
                [
                    'is_correct' => false
                ]
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $question = Question::where('question_text', 'Who is the main protagonist of Final Fantasy 7?')->first();
        if ($question) {
            Answer::where('question_id', $question->id)
                ->where('answer_text', 'Tifa Lockhart')
                ->delete();
        }
    }
}
