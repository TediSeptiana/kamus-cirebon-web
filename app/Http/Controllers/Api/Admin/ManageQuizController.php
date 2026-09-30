<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\QuizOption;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageQuizController extends Controller
{
    use ApiResponse;

    /**
     * Endpoint Admin: Tambah Soal Kuis Baru Beserta Opsi Jawabannya
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'explanation' => 'nullable|string',
            'options' => 'required|array|min:2', // Minimal harus ada 2 pilihan
            'options.*.option_text' => 'required|string',
            'options.*.is_correct' => 'required|boolean',
        ]);

        DB::beginTransaction();

        try {
            // 1. Simpan Soal Kuis
            $quiz = Quiz::create([
                'question' => $request->question,
                'explanation' => $request->explanation,
            ]);

            // 2. Simpan Opsi Pilihan Ganda
            foreach ($request->options as $opt) {
                QuizOption::create([
                    'quiz_id' => $quiz->id,
                    'option_text' => $opt['option_text'],
                    'is_correct' => $opt['is_correct'],
                ]);
            }

            DB::commit();

            // Ambil data beserta relasi opsinya untuk respons
            $quiz->load('options');

            return $this->successResponse($quiz, 'Soal kuis baru berhasil ditambahkan.', 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->errorResponse('Gagal menyimpan kuis: ' . $e->getMessage(), 500);
        }
    }
}