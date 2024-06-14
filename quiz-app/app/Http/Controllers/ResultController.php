<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Result;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    public function index()
    {
        // Restituisce un elenco di tutti i risultati
        return Result::all();
    }

    public function store(Request $request)
    {
        // Validazione della richiesta
        $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'answers' => 'required|array',
            'answers.*.question_id' => 'required|exists:questions,id',
            'answers.*.answer_id' => 'required|exists:answers,id',
        ]);

        $quiz_id = $request->quiz_id;
        $user_id = Auth::id();

        // Verifica se l'utente è autenticato
        if (!$user_id) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Calcolo del punteggio
        $answers = $request->answers;
        $question_ids = array_column($answers, 'question_id');
        $correct_answers = Answer::whereIn('question_id', $question_ids)
            ->where('is_correct', true)
            ->pluck('id', 'question_id');

        $score = 0;
        foreach ($answers as $userAnswer) {
            if (isset($correct_answers[$userAnswer['question_id']]) && $correct_answers[$userAnswer['question_id']] == $userAnswer['answer_id']) {
                $score++;
            }
        }

        // Creazione di un nuovo risultato in una transazione
        $result = DB::transaction(function () use ($quiz_id, $user_id, $score) {
            return Result::create([
                'quiz_id' => $quiz_id,
                'user_id' => $user_id,
                'score' => $score,
            ]);
        });

        return response()->json($result, 201);
    }

    public function show($id)
    {
        // Restituisce un risultato specifico
        $result = Result::find($id);
        if (!$result) {
            return response()->json(['error' => 'Result not found'], 404);
        }

        return response()->json($result);
    }

    public function update(Request $request, $id)
    {
        // Validazione della richiesta
        $request->validate([
            'score' => 'required|integer',
        ]);

        // Aggiornamento di un risultato esistente
        $result = Result::find($id);
        if (!$result) {
            return response()->json(['error' => 'Result not found'], 404);
        }

        $result->update($request->all());

        return response()->json($result, 200);
    }

    public function destroy($id)
    {
        // Cancellazione di un risultato
        $result = Result::find($id);
        if (!$result) {
            return response()->json(['error' => 'Result not found'], 404);
        }

        $result->delete();
        return response()->json(null, 204);
    }
}

