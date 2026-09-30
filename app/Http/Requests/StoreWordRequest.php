<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Sementara diset true agar mempermudah testing awal
    }

    public function rules(): array
    {
        return [
            'category_id' => 'nullable|exists:categories,id',
            'lemma' => 'required|string|max:100',
            'indonesian_meaning' => 'required|string|max:255',
            'word_class' => 'required|in:verb,noun,adjective,adverb,other',
            // Validasi file audio: harus berupa file berekstensi mp3 dan maksimal 2MB
            'audio' => 'nullable|file|mimes:mp3|max:2048', 
            'notes' => 'nullable|string',
        ];
    }
    
    // Opsional: Pesan error khusus agar lebih mudah dipahami
    public function messages()
    {
        return [
            'audio.mimes' => 'File audio harus berformat MP3.',
            'audio.max' => 'Ukuran file audio tidak boleh lebih dari 2MB.'
        ];
    }
}