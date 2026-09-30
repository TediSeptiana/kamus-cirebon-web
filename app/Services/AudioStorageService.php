<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;

class AudioStorageService
{
    /**
     * Simpan file audio yang diunggah ke storage
     *
     * @param UploadedFile $file
     * @return string (Path file yang disimpan)
     */
    public function storeAudio(UploadedFile $file): string
    {
        // Buat nama file unik untuk mencegah bentrok
        $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
        
        // Simpan ke storage/app/public/audio
        $file->storeAs('public/audio', $filename);
        
        return $filename; // Hanya simpan nama filenya saja untuk dipanggil di AudioController
    }
}