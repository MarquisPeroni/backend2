<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\Auth\RegisteredUserController;

// Rotte protette da autenticazione
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    // Rotte CRUD per Answer
    Route::get('/answers', [AnswerController::class, 'index']);
    Route::post('/answers', [AnswerController::class, 'store']); 
    Route::get('/answers/{id}', [AnswerController::class, 'show']);
    Route::put('/answers/{id}', [AnswerController::class, 'update']);
    Route::delete('/answers/{id}', [AnswerController::class, 'destroy']);
    
    // Rotte CRUD per Question
    Route::get('/questions', [QuestionController::class, 'index']);
    Route::post('/questions', [QuestionController::class, 'store']);
    Route::get('/questions/{id}', [QuestionController::class, 'show']);
    Route::put('/questions/{id}', [QuestionController::class, 'update']);
    Route::delete('/questions/{id}', [QuestionController::class, 'destroy']);
    
    // Rotte CRUD per Quiz
    Route::get('/quizzes', [QuizController::class, 'index']);
    Route::post('/quizzes', [QuizController::class, 'store']);
    Route::get('/quizzes/{id}', [QuizController::class, 'show']);
    Route::put('/quizzes/{id}', [QuizController::class, 'update']);
    Route::delete('/quizzes/{id}', [QuizController::class, 'destroy']);
    
    // Rotte CRUD per Result
    Route::get('/results', [ResultController::class, 'index']);
    Route::post('/results', [ResultController::class, 'store']);
    Route::get('/results/{id}', [ResultController::class, 'show']);
    Route::put('/results/{id}', [ResultController::class, 'update']);
    Route::delete('/results/{id}', [ResultController::class, 'destroy']);
    
    Route::get('/quizzes', [QuizController::class, 'index']);
    Route::get('/quizzes/{id}', [QuizController::class, 'show']);

    Route::get('/users/{user}/results', [RegisteredUserController::class, 'results']);
    
});
// Rotte pubbliche



