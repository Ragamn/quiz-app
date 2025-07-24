<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Answer;
use App\Models\Quiz;
use App\Models\Choice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $currentUserId = Auth::id();
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
        $currentUserId = Auth::id();
        $userRank = null;
        
        foreach ($scores as $index => $score) {
            if ($score->user_id == $currentUserId) {
                $userRank = $index + 1; // 1位から始まるため +1
                break;
            }
        }

        return view('scores.ranking', compact('scores', 'userRank'));
    }

    // ログインユーザーの最新スコアを取得
    public function getLatestUserScore($levelId)
    {
        $currentUserId = Auth::id();
        
        $latestScore = Score::where('user_id', $currentUserId)
            ->where('level_id', $levelId)
            ->select('score', 'created_at')
            ->orderBy('created_at', 'desc')
            ->first();

        // AnswersとQuizzesとChoicesを結合してユーザーの回答履歴を取得
        $recentAnswers = Answer::join('quizzes', 'answers.quiz_id', '=', 'quizzes.quiz_id')
            ->join('choices as user_choice', 'answers.choice_id', '=', 'user_choice.choice_id')
            ->join('choices as correct_choice', function($join) {
                $join->on('answers.quiz_id', '=', 'correct_choice.quiz_id')
                    ->where('correct_choice.is_correct', '=', true);
            })
            ->where('answers.user_id', $currentUserId)
            ->select('answers.*', 'quizzes.question', 'quizzes.explanation', 
                    'user_choice.choice as user_choice', 'correct_choice.choice as correct_choice')
            ->orderBy('answers.created_at', 'desc')
            ->limit(10)
            ->get();

        return view('scores.u_q_score',compact('latestScore', 'recentAnswers'));
    }
}
