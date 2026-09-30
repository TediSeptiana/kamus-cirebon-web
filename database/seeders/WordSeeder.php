<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Word;
use App\Models\Example;

class WordSeeder extends Seeder
{
    public function run(): void
    {
        // Contoh Kata 1
        $word1 = Word::create([
            'category_id' => 1, // Lingkungan Sekolah
            'lemma' => 'Buku',
            'indonesian_meaning' => 'Buku',
            'word_class' => 'noun',
        ]);
        
        Example::create([
            'word_id' => $word1->id,
            'cirebon_sentence' => 'Kula maca buku ring perpustakaan.',
            'indonesian_translation' => 'Saya membaca buku di perpustakaan.'
        ]);

        // Contoh Kata 2
        $word2 = Word::create([
            'category_id' => 2, // Kehidupan Sehari-hari
            'lemma' => 'Mangan',
            'indonesian_meaning' => 'Makan',
            'word_class' => 'verb',
        ]);

        Example::create([
            'word_id' => $word2->id,
            'cirebon_sentence' => 'Kula arep mangan sega jamblang.',
            'indonesian_translation' => 'Saya mau makan nasi jamblang.'
        ]);
    }
}