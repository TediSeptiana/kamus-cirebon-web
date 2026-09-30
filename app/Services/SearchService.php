<?php

namespace App\Services;

use App\Models\Word;

class SearchService
{
    /**
     * Melakukan pencarian lema berdasarkan kata kunci (keyword) dan/atau kategori.
     *
     * @param string|null $keyword
     * @param int|null $categoryId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function searchWords($keyword = null, $categoryId = null)
    {
        $query = Word::with(['category', 'examples']);

        // Jika ada kata kunci pencarian (mencari di lema atau arti bahasa Indonesia)
        if (!empty($keyword)) {
            $query->where(function($q) use ($keyword) {
                $q->where('lemma', 'LIKE', '%' . $keyword . '%')
                  ->orWhere('indonesian_meaning', 'LIKE', '%' . $keyword . '%');
            });
        }

        // Jika ada filter berdasarkan kategori
        if (!empty($categoryId)) {
            $query->where('category_id', $categoryId);
        }

        return $query->get();
    }
}