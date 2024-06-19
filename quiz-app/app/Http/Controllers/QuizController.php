<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function index()
    {
        // Restituisce un elenco di tutti i quiz
        return Quiz::all();
    }

    public function store(Request $request)
    {
        // Validazione della richiesta
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Creazione di un nuovo quiz
        $quiz = Quiz::create([
            'title' => $request->title,
            'description' => $request->description,
            'created_by' => Auth::id(),
        ]);

        return response()->json($quiz, 201);
    }

    public function show($id)
    {
        // Carica il quiz con le domande e le risposte associate
        $quiz = Quiz::with('questions.answers')->find($id);
        if (!$quiz) {
            return response()->json(['error' => 'Quiz not found'], 404);
        }

        return response()->json($quiz);
    }

    public function update(Request $request, $id)
    {
        // Validazione della richiesta
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Aggiornamento di un quiz esistente
        $quiz = Quiz::find($id);
        if (!$quiz) {
            return response()->json(['error' => 'Quiz not found'], 404);
        }

        $quiz->update($request->all());

        return response()->json($quiz, 200);
    }

    public function destroy($id)
    {
        // Cancellazione di un quiz
        $quiz = Quiz::find($id);
        if (!$quiz) {
            return response()->json(['error' => 'Quiz not found'], 404);
        }

        $quiz->delete();
        return response()->json(null, 204);
    }
}
