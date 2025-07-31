<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $primaryKey = 'answer_id';
    
    protected $fillable = [
        'user_id',
        'quiz_id',
        'choice_id',
        'score_id',
        'is_correct'
    ];

    protected $casts = [
        'is_correct' => 'boolean',
    ];

    // Userとのリレーション
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Quizとのリレーション
    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'quiz_id', 'quiz_id');
    }

    // Choiceとのリレーション
    public function choice()
    {
        return $this->belongsTo(Choice::class, 'choice_id', 'choice_id');
    }

    // Scoreとのリレーション
    public function score()
    {
        return $this->belongsTo(Score::class, 'score_id', 'score_id');
    }
}
