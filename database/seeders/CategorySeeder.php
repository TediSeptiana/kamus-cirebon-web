<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['slug' => 'lingkungan-sekolah',   'name' => 'Lingkungan Sekolah',      'description' => 'Kosakata yang sering digunakan di lingkungan sekolah.'],
            ['slug' => 'kehidupan-sehari-hari','name' => 'Kehidupan Sehari-hari',   'description' => 'Kosakata untuk aktivitas dan benda sehari-hari.'],
            ['slug' => 'keluarga-sosial',      'name' => 'Keluarga & Sosial',       'description' => 'Kosakata tentang keluarga dan interaksi sosial.'],
            ['slug' => 'sifat-karakter',       'name' => 'Sifat & Karakter',        'description' => 'Kosakata tentang sifat, karakter, dan keadaan.'],
            ['slug' => 'agama-budaya',         'name' => 'Agama & Budaya',          'description' => 'Kosakata tentang agama, adat, dan budaya.'],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(['slug' => $cat['slug']], $cat);
        }
    }
}