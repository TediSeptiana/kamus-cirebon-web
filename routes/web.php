<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebKamusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini kita mendaftarkan rute web untuk antarmuka pengguna (front-end)
| Kamus Digital Bahasa Cirebon.
|--------------------------------------------------------------------------
*/


// Halaman Aplikasi Kamus Utama
Route::get('/', function () {
    return view('dictionary.index');
});

Route::get('/', [WebKamusController::class, 'index'])->name('dictionary.index');