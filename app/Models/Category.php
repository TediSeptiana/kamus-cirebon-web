<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    // Opsional, agar mass assignment bisa berjalan (mengizinkan data dimasukkan)
    protected $guarded = ['id'];

    public function words() {
        return $this->hasMany(Word::class);
    }
}