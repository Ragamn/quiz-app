<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Choice;

class QuizController extends Controller
{
    /**
     * 指定されたレベルのクイズを10件ランダムに取得
     */
    public function getQuizzes($levelId)
    {
        // バリデーション
        if (!$levelId) {
            return redirect()->back()->with('error', 'レベルを選択してください。');
        }
        
        // 指定レベルのクイズを10件ランダムに取得（選択肢も含む）
        $quizzes = Quiz::where('level_id', $levelId)
            ->with(['choices' => function($query) {
                $query->select('choice_id', 'quiz_id', 'choice', 'is_correct');
            }])
            ->inRandomOrder()
            ->limit(10)
            ->get();
            
        // クイズが存在しない場合
        if ($quizzes->isEmpty()) {
            return redirect()->back()->with('error', 'このレベルのクイズがまだ準備されていません。');
        }
        
        // 各クイズに正解の選択肢を追加
        $quizzes->each(function($quiz) {
            $correctChoice = $quiz->choices->where('is_correct', true)->first();
            $quiz->answer = [
                'choice_id' => $correctChoice ? $correctChoice->choice_id : null,
                'choice' => $correctChoice ? $correctChoice->choice : null
            ];
        });
        
        return compact('quizzes', 'levelId');
    }
}
