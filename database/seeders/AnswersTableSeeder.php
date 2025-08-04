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
            // ユーザー1の回答（全レベル満点 - 45問中45問正解）
            
            // 初級レベル 1-15問 全正解
            ['user_id' => 1, 'quiz_id' => 1, 'choice_id' => 1, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 2, 'choice_id' => 5, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 3, 'choice_id' => 9, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 4, 'choice_id' => 13, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 5, 'choice_id' => 17, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 6, 'choice_id' => 21, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 7, 'choice_id' => 25, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 8, 'choice_id' => 29, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 9, 'choice_id' => 33, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 10, 'choice_id' => 37, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 11, 'choice_id' => 41, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 12, 'choice_id' => 45, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 13, 'choice_id' => 49, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 14, 'choice_id' => 53, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 15, 'choice_id' => 57, 'score_id' => 1, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            
            // 中級レベル 16-30問 全正解
            ['user_id' => 1, 'quiz_id' => 16, 'choice_id' => 61, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 17, 'choice_id' => 65, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 18, 'choice_id' => 69, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 19, 'choice_id' => 73, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 20, 'choice_id' => 77, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 21, 'choice_id' => 81, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 22, 'choice_id' => 85, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 23, 'choice_id' => 89, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 24, 'choice_id' => 93, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 25, 'choice_id' => 97, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 26, 'choice_id' => 101, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 27, 'choice_id' => 105, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 28, 'choice_id' => 109, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 29, 'choice_id' => 113, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 30, 'choice_id' => 117, 'score_id' => 2, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            
            // 上級レベル 31-45問 全正解
            ['user_id' => 1, 'quiz_id' => 31, 'choice_id' => 121, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 32, 'choice_id' => 125, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 33, 'choice_id' => 129, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 34, 'choice_id' => 133, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 35, 'choice_id' => 137, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 36, 'choice_id' => 141, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 37, 'choice_id' => 145, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 38, 'choice_id' => 149, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 39, 'choice_id' => 153, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 40, 'choice_id' => 157, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 41, 'choice_id' => 161, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 42, 'choice_id' => 165, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 43, 'choice_id' => 169, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 44, 'choice_id' => 173, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 1, 'quiz_id' => 45, 'choice_id' => 177, 'score_id' => 3, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],

            // ユーザー2の回答（初級12問正解、中級10問正解、上級8問正解）
            
            // 初級レベル（12/15問正解）
            ['user_id' => 2, 'quiz_id' => 1, 'choice_id' => 1, 'score_id' => 4, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 2, 'choice_id' => 5, 'score_id' => 4, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 3, 'choice_id' => 10, 'score_id' => 4, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解
            ['user_id' => 2, 'quiz_id' => 4, 'choice_id' => 13, 'score_id' => 4, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 5, 'choice_id' => 17, 'score_id' => 4, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 6, 'choice_id' => 22, 'score_id' => 4, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解
            ['user_id' => 2, 'quiz_id' => 7, 'choice_id' => 25, 'score_id' => 4, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 8, 'choice_id' => 29, 'score_id' => 4, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 9, 'choice_id' => 33, 'score_id' => 4, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 10, 'choice_id' => 38, 'score_id' => 4, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解
            ['user_id' => 2, 'quiz_id' => 11, 'choice_id' => 41, 'score_id' => 4, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 12, 'choice_id' => 45, 'score_id' => 4, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 13, 'choice_id' => 49, 'score_id' => 4, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 14, 'choice_id' => 53, 'score_id' => 4, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 15, 'choice_id' => 57, 'score_id' => 4, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],

            // 中級レベル（10/15問正解）
            ['user_id' => 2, 'quiz_id' => 16, 'choice_id' => 61, 'score_id' => 5, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 17, 'choice_id' => 66, 'score_id' => 5, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解
            ['user_id' => 2, 'quiz_id' => 18, 'choice_id' => 69, 'score_id' => 5, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 19, 'choice_id' => 73, 'score_id' => 5, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 20, 'choice_id' => 78, 'score_id' => 5, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解
            ['user_id' => 2, 'quiz_id' => 21, 'choice_id' => 81, 'score_id' => 5, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 22, 'choice_id' => 85, 'score_id' => 5, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 23, 'choice_id' => 90, 'score_id' => 5, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解
            ['user_id' => 2, 'quiz_id' => 24, 'choice_id' => 93, 'score_id' => 5, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 25, 'choice_id' => 97, 'score_id' => 5, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 26, 'choice_id' => 102, 'score_id' => 5, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解
            ['user_id' => 2, 'quiz_id' => 27, 'choice_id' => 105, 'score_id' => 5, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 28, 'choice_id' => 109, 'score_id' => 5, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 29, 'choice_id' => 113, 'score_id' => 5, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 30, 'choice_id' => 118, 'score_id' => 5, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解

            // 上級レベル（8/15問正解）
            ['user_id' => 2, 'quiz_id' => 31, 'choice_id' => 121, 'score_id' => 6, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 32, 'choice_id' => 126, 'score_id' => 6, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解
            ['user_id' => 2, 'quiz_id' => 33, 'choice_id' => 129, 'score_id' => 6, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 34, 'choice_id' => 134, 'score_id' => 6, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解
            ['user_id' => 2, 'quiz_id' => 35, 'choice_id' => 137, 'score_id' => 6, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 36, 'choice_id' => 142, 'score_id' => 6, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解
            ['user_id' => 2, 'quiz_id' => 37, 'choice_id' => 145, 'score_id' => 6, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 38, 'choice_id' => 150, 'score_id' => 6, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解
            ['user_id' => 2, 'quiz_id' => 39, 'choice_id' => 153, 'score_id' => 6, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 40, 'choice_id' => 158, 'score_id' => 6, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解
            ['user_id' => 2, 'quiz_id' => 41, 'choice_id' => 161, 'score_id' => 6, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 42, 'choice_id' => 166, 'score_id' => 6, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解
            ['user_id' => 2, 'quiz_id' => 43, 'choice_id' => 169, 'score_id' => 6, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'quiz_id' => 44, 'choice_id' => 174, 'score_id' => 6, 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()], // 不正解
            ['user_id' => 2, 'quiz_id' => 45, 'choice_id' => 177, 'score_id' => 6, 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('answers')->insert($answers);
    }
}
