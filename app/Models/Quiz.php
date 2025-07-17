<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $primaryKey = 'quiz_id';
    
    protected $fillable = [
        'level_id',
        'question',
        'explanation'
    ];

    // Levelとのリレーション
    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id', 'level_id');
    }

    // Choicesとのリレーション
    public function choices()
    {
        return $this->hasMany(Choice::class, 'quiz_id', 'quiz_id');
    }

    // Answersとのリレーション
    public function answers()
    {
        return $this->hasMany(Answer::class, 'quiz_id', 'quiz_id');
    }
}
