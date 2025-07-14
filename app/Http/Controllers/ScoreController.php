<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function ranking()
    {
        // スコアの高い順にユーザー名とスコアを取得
        $scores = Score::with('user')
            ->where('level_id', 1)
            ->select('score_id', 'user_id', 'score', 'level_id')
            ->orderBy('score', 'desc')
            ->get();

        // ログインユーザーの順位を取得
        $currentUserId = auth()->id();
        $userRank = null;
        
        foreach ($scores as $index => $score) {
            if ($score->user_id == $currentUserId) {
                $userRank = $index + 1; // 1位から始まるため +1
                break;
            }
        }

        return view('scores.ranking', compact('scores', 'userRank'));
    }

    // レベル別ランキング
    public function rankingByLevel($levelId)
    {
        $scores = Score::with('user')
            ->where('level_id', $levelId)
            ->orderBy('score', 'desc')
            ->get();
        
        // ログインユーザーの順位を取得
        $currentUserId = auth()->id();
        $userRank = null;
        
        foreach ($scores as $index => $score) {
            if ($score->user_id == $currentUserId) {
                $userRank = $index + 1; // 1位から始まるため +1
                break;
            }
        }

        return view('scores.ranking', compact('scores', 'userRank'));
    }
}
