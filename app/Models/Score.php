<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $primaryKey = 'score_id';
    
    protected $fillable = [
        'user_id',
        'level_id', 
        'score'
    ];

    // Userとのリレーション
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Levelとのリレーション
    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id', 'level_id');
    }
}
