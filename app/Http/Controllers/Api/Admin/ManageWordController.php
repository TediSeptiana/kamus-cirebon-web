<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWordRequest;
use App\Models\Word;
use App\Services\AudioStorageService;
use App\Traits\ApiResponse;

class ManageWordController extends Controller
{
    use ApiResponse;

    private $audioService;

    public function __construct(AudioStorageService $audioService)
    {
        $this->audioService = $audioService;
    }

    /**
     * Endpoint Admin: Tambah Kosakata Baru
     */
    public function store(StoreWordRequest $request)
    {
        // 1. Ambil data yang sudah lolos validasi FormRequest
        $data = $request->validated();

        // 2. Jika ada unggahan file audio, proses via Service
        if ($request->hasFile('audio')) {
            $data['audio_path'] = $this->audioService->storeAudio($request->file('audio'));
        }

        // 3. Simpan ke Database
        $word = Word::create($data);

        return $this->successResponse($word, 'Kosakata baru berhasil ditambahkan.', 201);
    }
}