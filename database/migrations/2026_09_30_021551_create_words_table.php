<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('words', function (Blueprint $table) {
            $table->id();
            // Foreign key ke tabel categories
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null');
            
            $table->string('lemma')->index(); // Index agar fitur pencarian kata lebih cepat
            $table->string('indonesian_meaning');
            $table->enum('word_class', ['verb', 'noun', 'adjective', 'adverb', 'other'])->default('other');
            $table->string('audio_path')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('words');
    }
}
