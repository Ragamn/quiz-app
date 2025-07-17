<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    protected $primaryKey = 'choice_id';
    
    protected $fillable = [
        'quiz_id',
        'choice',
        'is_correct'
    ];

    protected $casts = [
        'is_correct' => 'boolean',
    ];

    // Quizとのリレーション
    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'quiz_id', 'quiz_id');
    }

    // Answersとのリレーション
    public function answers()
    {
        return $this->hasMany(Answer::class, 'choice_id', 'choice_id');
    }
}
