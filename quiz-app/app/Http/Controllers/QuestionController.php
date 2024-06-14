<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        // Restituisce un elenco di tutte le domande
        return Question::all();
    }

    public function store(Request $request)
    {
        // Validazione della richiesta
        $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'question_text' => 'required|string',
        ]);

        // Creazione di una nuova domanda
        $question = Question::create($request->all());

        return response()->json($question, 201);
    }

    public function show($id)
    {
        // Restituisce una domanda specifica
        $question = Question::find($id);
        if (!$question) {
            return response()->json(['error' => 'Question not found'], 404);
        }

        return response()->json($question);
    }

    public function update(Request $request, $id)
    {
        // Validazione della richiesta
        $request->validate([
            'question_text' => 'required|string',
        ]);

        // Aggiornamento di una domanda esistente
        $question = Question::find($id);
        if (!$question) {
            return response()->json(['error' => 'Question not found'], 404);
        }

        $question->update($request->all());

        return response()->json($question, 200);
    }

    public function destroy($id)
    {
        // Cancellazione di una domanda
        $question = Question::find($id);
        if (!$question) {
            return response()->json(['error' => 'Question not found'], 404);
        }

        $question->delete();
        return response()->json(null, 204);
    }
}
