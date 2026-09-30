<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchWordRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Ubah menjadi true agar semua orang (siswa) bisa melakukan pencarian
        return true;
    }

    public function rules(): array
    {
        return [
            // Kata kunci pencarian opsional, berupa teks, maksimal 100 karakter
            'keyword' => 'nullable|string|max:100',
            // Kategori opsional, tapi jika diisi, ID-nya harus ada di tabel categories
            'category_id' => 'nullable|exists:categories,id',
        ];
    }
}