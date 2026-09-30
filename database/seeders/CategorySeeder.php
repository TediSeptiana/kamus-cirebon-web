<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Lingkungan Sekolah',
            'slug' => 'lingkungan-sekolah',
            'description' => 'Kosakata yang sering digunakan di lingkungan sekolah.'
        ]);

        Category::create([
            'name' => 'Kehidupan Sehari-hari',
            'slug' => 'kehidupan-sehari-hari',
            'description' => 'Kosakata untuk percakapan sehari-hari.'
        ]);
        
        Category::create([
            'name' => 'Keluarga',
            'slug' => 'keluarga',
            'description' => 'Kosakata seputar anggota keluarga dan kerabat.'
        ]);
    }
}