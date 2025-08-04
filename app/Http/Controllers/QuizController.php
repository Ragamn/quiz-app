<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Choice;
use App\Models\Answer;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;

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
        
        return view('u_q_answer', compact('quizzes', 'levelId'));
        
    }

    /**
     * クイズ結果を保存して、スコア表示ページにリダイレクト
     */
    public function saveResults(Request $request)
    {
        $userId = Auth::id();
        $answers = $request->input('answers');
        $results = $request->input('results');
        
        // バリデーション
        if (!$answers || !$results) {
            return response()->json(['error' => 'Invalid data'], 400);
        }
        
        $levelId = $results[0];
        $score = $results[1];
        
        try {
            // まずスコアを保存（10問ベースで100点満点に換算）
            $scoreRecord = Score::create([
                'user_id' => $userId,
                'level_id' => $levelId,
                'score' => ($score * 10) // 10問中の正解数を10倍して100点満点に換算
            ]);
            
            // 回答データを保存（score_idを含める）
            foreach ($answers as $answer) {
                Answer::create([
                    'user_id' => $userId,
                    'quiz_id' => $answer[0],
                    'choice_id' => $answer[1],
                    'score_id' => $scoreRecord->score_id,
                    'is_correct' => $answer[2]
                ]);
            }
            
            // スコア表示ページのURLを返す
            return response()->json([
                'success' => true,
                'redirect_url' => route('scores.latest', ['levelId' => $levelId])
            ]);
            
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to save results: ' . $e->getMessage()], 500);
        }
    }
}
