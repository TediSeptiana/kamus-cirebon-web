<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WordController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\QuizController;
use App\Http\Controllers\Api\AudioController;
use App\Http\Controllers\Api\Admin\ManageWordController;
use App\Http\Controllers\Api\Admin\AuthController;
use App\Http\Controllers\Api\Admin\ManageQuizController;

// Endpoint Publik (Siswa)
Route::get('/words/search', [WordController::class, 'index']); 
Route::get('/categories', [CategoryController::class, 'index']); 
Route::get('/quizzes', [QuizController::class, 'index']); 
Route::post('/quizzes/submit', [QuizController::class, 'submit']); 
Route::get('/audio/{filename}', [AudioController::class, 'stream']); 

// Endpoint Auth Admin
Route::post('/admin/login', [AuthController::class, 'login']);

// Endpoint Admin yang Diproteksi Sanctum
Route::middleware('auth:sanctum')->prefix('admin')->group(function () {
    Route::post('/words', [ManageWordController::class, 'store']);
});


// Endpoint Admin yang Diproteksi Sanctum
Route::middleware('auth:sanctum')->prefix('admin')->group(function () {
    Route::post('/words', [ManageWordController::class, 'store']);
    
    // Tambahan rute kelola kuis admin
    Route::post('/quizzes', [ManageQuizController::class, 'store']);
});