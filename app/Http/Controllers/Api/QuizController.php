<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubmitQuizRequest;
use App\Models\Quiz;
use App\Services\QuizEvaluationService;
use App\Traits\ApiResponse;

class QuizController extends Controller
{
    use ApiResponse;

    private $quizEvaluationService;

    public function __construct(QuizEvaluationService $quizEvaluationService)
    {
        $this->quizEvaluationService = $quizEvaluationService;
    }

    /**
     * Endpoint untuk mengambil soal kuis
     */
    public function index()
    {
        // Gunakan Eager Loading ('options') untuk mencegah N+1 Query Problem
        $quizzes = Quiz::with('options')->inRandomOrder()->limit(10)->get();
        
        return $this->successResponse($quizzes, 'Soal kuis berhasil diambil.');
    }

    /**
     * Endpoint untuk mensubmit jawaban kuis
     */
    public function submit(SubmitQuizRequest $request)
    {
        // Data dijamin aman karena sudah divalidasi oleh SubmitQuizRequest
        $answers = $request->validated()['answers'];

        // Delegasikan perhitungan skor ke Service
        $evaluation = $this->quizEvaluationService->evaluate($answers);

        return $this->successResponse($evaluation, 'Kuis berhasil dievaluasi.');
    }
}