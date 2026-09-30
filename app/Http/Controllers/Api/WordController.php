<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchWordRequest;
use App\Services\SearchService;
use App\Traits\ApiResponse;

class WordController extends Controller
{
    use ApiResponse;

    private $searchService;

    // Dependency Injection untuk memanggil Service
    public function __construct(SearchService $searchService)
    {
        $this->searchService = $searchService;
    }

    /**
     * Endpoint untuk mencari kosakata (Lema)
     */
    public function index(SearchWordRequest $request)
    {
        // Request sudah tervalidasi secara otomatis oleh SearchWordRequest
        $keyword = $request->input('keyword');
        $categoryId = $request->input('category_id');

        // Panggil logika bisnis dari Service
        $words = $this->searchService->searchWords($keyword, $categoryId);

        // Kembalikan response JSON yang terstandarisasi
        return $this->successResponse($words, 'Data kosakata berhasil diambil.');
    }
}