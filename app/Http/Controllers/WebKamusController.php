<?php

namespace App\Http\Controllers;

use App\Models\Word;
use App\Models\Category;
use Illuminate\Http\Request;

class WebKamusController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $categoryId = $request->input('category_id');

        // Query dasar: ambil kata + relasi category dan examples
        $query = Word::with(['category', 'examples']);

        // Filter berdasarkan keyword (lemma atau arti Indonesia)
        if (!empty($keyword)) {
            $query->where(function ($q) use ($keyword) {
                $q->where('lemma', 'like', '%' . $keyword . '%')
                  ->orWhere('indonesian_meaning', 'like', '%' . $keyword . '%');
            });
        }

        // Filter berdasarkan kategori
        if (!empty($categoryId)) {
            $query->where('category_id', $categoryId);
        }

        // Urutkan & paginate
        $words = $query->orderBy('lemma', 'asc')->paginate(20)->withQueryString();

        // Ambil semua kategori untuk dropdown filter
        $categories = Category::orderBy('name')->get();

        return view('dictionary.index', compact('words', 'categories', 'keyword', 'categoryId'));
    }
}