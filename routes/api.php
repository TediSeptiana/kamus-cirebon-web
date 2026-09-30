<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WordController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\QuizController;
use App\Http\Controllers\Api\AudioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Endpoint Pencarian dan Kategori
Route::get('/words/search', [WordController::class, 'index']); // Mendapatkan lema bahasa Cirebon berdasarkan keyword/kategori
// Route::get('/categories', [CategoryController::class, 'index']); // Mengambil semua kategori (bisa dibuat nanti)

// Endpoint Kuis Latihan
// Route::get('/quizzes', [QuizController::class, 'index']); // Mengambil soal kuis (bisa dibuat nanti)
// Route::post('/quizzes/submit', [QuizController::class, 'submit']); // Mengevaluasi jawaban kuis (bisa dibuat nanti)

// Endpoint Audio
// Route::get('/audio/{filename}', [AudioController::class, 'stream']); // Streaming audio (bisa dibuat nanti)