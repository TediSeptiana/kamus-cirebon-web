<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Traits\ApiResponse;

class AudioController extends Controller
{
    use ApiResponse;

    /**
     * Endpoint untuk streaming file audio pelafalan
     */
    public function stream($filename)
    {
        $path = 'public/audio/' . $filename;
        
        if (!Storage::exists($path)) {
            return $this->errorResponse('File audio tidak ditemukan.', 404);
        }

        // Kembalikan file langsung agar bisa diputar oleh HTML5 <audio> di Front-End
        return response()->file(storage_path('app/' . $path));
    }
}