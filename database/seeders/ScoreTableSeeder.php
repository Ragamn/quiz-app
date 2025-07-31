<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scores = [
            // ユーザー1のスコア（全レベル満点）
            [
                'user_id' => 1,
                'level_id' => 1, // 初級
                'score' => 100, // 10問中10問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'level_id' => 2, // 中級
                'score' => 100, // 10問中10問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'level_id' => 3, // 上級
                'score' => 100, // 10問中10問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ユーザー2のスコア（レベルが上がるにつれて点数が下がる）
            [
                'user_id' => 2,
                'level_id' => 1, // 初級
                'score' => 60, // 10問中6問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'level_id' => 2, // 中級
                'score' => 60, // 10問中6問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'level_id' => 3, // 上級
                'score' => 40, // 10問中4問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ユーザー3のスコア（レベルが上がるにつれて点数が下がる）
            [
                'user_id' => 3,
                'level_id' => 1, // 初級
                'score' => 70, // 10問中7問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'level_id' => 2, // 中級
                'score' => 50, // 10問中5問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'level_id' => 3, // 上級
                'score' => 40, // 10問中4問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ユーザー4のスコア（高橋美咲）
            [
                'user_id' => 4,
                'level_id' => 1, // 初級
                'score' => 90, // 10問中9問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'level_id' => 2, // 中級
                'score' => 80, // 10問中8問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'level_id' => 3, // 上級
                'score' => 70, // 10問中7問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ユーザー5のスコア（山田健太）
            [
                'user_id' => 5,
                'level_id' => 1, // 初級
                'score' => 80, // 10問中8問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'level_id' => 2, // 中級
                'score' => 70, // 10問中7問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'level_id' => 3, // 上級
                'score' => 60, // 10問中6問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ユーザー6のスコア（中村麻里）
            [
                'user_id' => 6,
                'level_id' => 1, // 初級
                'score' => 50, // 10問中5問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'level_id' => 2, // 中級
                'score' => 40, // 10問中4問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'level_id' => 3, // 上級
                'score' => 30, // 10問中3問正解
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('scores')->insert($scores);
    }
}
