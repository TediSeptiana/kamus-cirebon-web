<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WordController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\QuizController;
use App\Http\Controllers\Api\AudioController;  

Route::get('/words/search', [WordController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/quizzes', [QuizController::class, 'index']);
Route::post('/quizzes/submit', [QuizController::class, 'submit']);

// Endpoint Audio
Route::get('/audio/{filename}', [AudioController::class, 'stream']);

// Endpoint Admin
Route::prefix('admin')->group(function () {
    Route::post('/words', [WordController::class, 'store']);  
});