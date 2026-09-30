<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitQuizRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; 
    }

    public function rules(): array
    {
        return [
            // Jawaban harus dikirim dalam bentuk array (kumpulan jawaban)
            'answers' => 'required|array',
            // Memastikan ID kuis dan opsi jawaban benar-benar ada di database
            'answers.*.quiz_id' => 'required|exists:quizzes,id',
            'answers.*.option_id' => 'required|exists:quiz_options,id',
        ];
    }
}