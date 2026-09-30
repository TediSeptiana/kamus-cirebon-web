<?php

namespace App\Services;

use App\Models\QuizOption;

class QuizEvaluationService
{
    /**
     * Evaluasi jawaban kuis siswa
     * 
     * @param array $answers (Format: [['quiz_id' => 1, 'option_id' => 3], ...])
     * @return array
     */
    public function evaluate(array $answers)
    {
        $totalQuestions = count($answers);
        $correctAnswers = 0;
        $results = [];

        foreach ($answers as $answer) {
            // Ambil opsi yang dipilih siswa beserta relasi kuisnya (Eager Loading)
            $option = QuizOption::with('quiz')->find($answer['option_id']);
            
            $isCorrect = $option ? $option->is_correct : false;
            
            if ($isCorrect) {
                $correctAnswers++;
            }

            $results[] = [
                'quiz_id' => $answer['quiz_id'],
                'question' => $option ? $option->quiz->question : 'Soal tidak ditemukan',
                'is_correct' => $isCorrect,
                'explanation' => $option ? $option->quiz->explanation : null,
            ];
        }

        $score = $totalQuestions > 0 ? ($correctAnswers / $totalQuestions) * 100 : 0;

        return [
            'score' => round($score, 2),
            'correct_count' => $correctAnswers,
            'total_questions' => $totalQuestions,
            'details' => $results,
        ];
    }
}