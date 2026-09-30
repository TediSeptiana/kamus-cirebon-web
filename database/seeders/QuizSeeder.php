<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\QuizOption;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'question' => 'Apa arti dari kata "Mangan" dalam bahasa Indonesia?',
            'explanation' => 'Kata "Mangan" merupakan kata kerja yang berarti makan.'
        ]);

        QuizOption::create(['quiz_id' => $quiz->id, 'option_text' => 'Minum', 'is_correct' => false]);
        QuizOption::create(['quiz_id' => $quiz->id, 'option_text' => 'Tidur', 'is_correct' => false]);
        QuizOption::create(['quiz_id' => $quiz->id, 'option_text' => 'Makan', 'is_correct' => true]);
        QuizOption::create(['quiz_id' => $quiz->id, 'option_text' => 'Lari', 'is_correct' => false]);
    }
}