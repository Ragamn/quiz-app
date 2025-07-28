<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answers = [
            // ユーザー1の回答（初級レベル）
            [
                'user_id' => 1,
                'quiz_id' => 1,
                'choice_id' => 1, // 正解
                'score_id' => 1, // ユーザー1の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 2,
                'choice_id' => 5, // 正解
                'score_id' => 1, // ユーザー1の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 3,
                'choice_id' => 9, // 正解
                'score_id' => 1, // ユーザー1の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 4,
                'choice_id' => 13, // 正解
                'score_id' => 1, // ユーザー1の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 5,
                'choice_id' => 17, // 正解
                'score_id' => 1, // ユーザー1の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 6,
                'choice_id' => 21, // 正解
                'score_id' => 1, // ユーザー1の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 7,
                'choice_id' => 25, // 正解
                'score_id' => 1, // ユーザー1の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 8,
                'choice_id' => 29, // 正解
                'score_id' => 1, // ユーザー1の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 9,
                'choice_id' => 33, // 正解
                'score_id' => 1, // ユーザー1の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 10,
                'choice_id' => 37, // 正解
                'score_id' => 1, // ユーザー1の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ユーザー1の回答（中級レベル）
            [
                'user_id' => 1,
                'quiz_id' => 11,
                'choice_id' => 41, // 正解
                'score_id' => 2, // ユーザー1の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 12,
                'choice_id' => 45, // 正解
                'score_id' => 2, // ユーザー1の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 13,
                'choice_id' => 49, // 正解
                'score_id' => 2, // ユーザー1の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 14,
                'choice_id' => 53, // 正解
                'score_id' => 2, // ユーザー1の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 15,
                'choice_id' => 57, // 正解
                'score_id' => 2, // ユーザー1の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 16,
                'choice_id' => 61, // 正解
                'score_id' => 2, // ユーザー1の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 17,
                'choice_id' => 65, // 正解
                'score_id' => 2, // ユーザー1の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 18,
                'choice_id' => 69, // 正解
                'score_id' => 2, // ユーザー1の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 19,
                'choice_id' => 73, // 正解
                'score_id' => 2, // ユーザー1の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 20,
                'choice_id' => 77, // 正解
                'score_id' => 2, // ユーザー1の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ユーザー1の回答（上級レベル）
            [
                'user_id' => 1,
                'quiz_id' => 21,
                'choice_id' => 81, // 正解
                'score_id' => 3, // ユーザー1の上級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 22,
                'choice_id' => 85, // 正解
                'score_id' => 3, // ユーザー1の上級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 23,
                'choice_id' => 89, // 正解
                'score_id' => 3, // ユーザー1の上級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 24,
                'choice_id' => 93, // 正解
                'score_id' => 3, // ユーザー1の上級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 25,
                'choice_id' => 97, // 正解
                'score_id' => 3, // ユーザー1の上級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 26,
                'choice_id' => 101, // 正解
                'score_id' => 3, // ユーザー1の上級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 27,
                'choice_id' => 105, // 正解
                'score_id' => 3, // ユーザー1の上級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 28,
                'choice_id' => 109, // 正解
                'score_id' => 3, // ユーザー1の上級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 29,
                'choice_id' => 113, // 正解
                'score_id' => 3, // ユーザー1の上級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'quiz_id' => 30,
                'choice_id' => 117, // 正解
                'score_id' => 3, // ユーザー1の上級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ユーザー2の回答（初級レベル - 一部間違い）
            [
                'user_id' => 2,
                'quiz_id' => 1,
                'choice_id' => 1, // 正解
                'score_id' => 4, // ユーザー2の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 2,
                'choice_id' => 6, // 不正解
                'score_id' => 4, // ユーザー2の初級スコア
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 3,
                'choice_id' => 9, // 正解
                'score_id' => 4, // ユーザー2の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 4,
                'choice_id' => 14, // 不正解
                'score_id' => 4, // ユーザー2の初級スコア
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 5,
                'choice_id' => 17, // 正解
                'score_id' => 4, // ユーザー2の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 6,
                'choice_id' => 21, // 正解
                'score_id' => 4, // ユーザー2の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 7,
                'choice_id' => 26, // 不正解
                'score_id' => 4, // ユーザー2の初級スコア
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 8,
                'choice_id' => 29, // 正解
                'score_id' => 4, // ユーザー2の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 9,
                'choice_id' => 33, // 正解
                'score_id' => 4, // ユーザー2の初級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 10,
                'choice_id' => 38, // 不正解
                'score_id' => 4, // ユーザー2の初級スコア
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ユーザー2の回答（中級レベル - 一部間違い）
            [
                'user_id' => 2,
                'quiz_id' => 11,
                'choice_id' => 41, // 正解
                'score_id' => 5, // ユーザー2の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 12,
                'choice_id' => 46, // 不正解
                'score_id' => 5, // ユーザー2の中級スコア
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 13,
                'choice_id' => 49, // 正解
                'score_id' => 5, // ユーザー2の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 14,
                'choice_id' => 54, // 不正解
                'score_id' => 5, // ユーザー2の中級スコア
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 15,
                'choice_id' => 57, // 正解
                'score_id' => 5, // ユーザー2の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 16,
                'choice_id' => 61, // 正解
                'score_id' => 5, // ユーザー2の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 17,
                'choice_id' => 66, // 不正解
                'score_id' => 5, // ユーザー2の中級スコア
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 18,
                'choice_id' => 69, // 正解
                'score_id' => 5, // ユーザー2の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 19,
                'choice_id' => 73, // 正解
                'score_id' => 5, // ユーザー2の中級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 20,
                'choice_id' => 78, // 不正解
                'score_id' => 5, // ユーザー2の中級スコア
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ユーザー2の回答（上級レベル - より多くの間違い）
            [
                'user_id' => 2,
                'quiz_id' => 21,
                'choice_id' => 82, // 不正解
                'score_id' => 6, // ユーザー2の上級スコア
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 22,
                'choice_id' => 85, // 正解
                'score_id' => 6, // ユーザー2の上級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 23,
                'choice_id' => 90, // 不正解
                'score_id' => 6, // ユーザー2の上級スコア
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 24,
                'choice_id' => 94, // 不正解
                'score_id' => 6, // ユーザー2の上級スコア
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 25,
                'choice_id' => 97, // 正解
                'score_id' => 6, // ユーザー2の上級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 26,
                'choice_id' => 102, // 不正解
                'score_id' => 6, // ユーザー2の上級スコア
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 27,
                'choice_id' => 105, // 正解
                'score_id' => 6, // ユーザー2の上級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 28,
                'choice_id' => 110, // 不正解
                'score_id' => 6, // ユーザー2の上級スコア
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 29,
                'choice_id' => 113, // 正解
                'score_id' => 6, // ユーザー2の上級スコア
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'quiz_id' => 30,
                'choice_id' => 118, // 不正解
                'score_id' => 6, // ユーザー2の上級スコア
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('answers')->insert($answers);
    }
}
