<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\ApiResponse;

class CategoryController extends Controller
{
    use ApiResponse;

    /**
     * Endpoint untuk mengambil semua kategori/tema
     */
    public function index()
    {
        // Mengambil semua data kategori
        $categories = Category::all();

        return $this->successResponse($categories, 'Data kategori berhasil diambil.');
    }
}