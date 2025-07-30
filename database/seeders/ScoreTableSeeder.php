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
        ];

        DB::table('scores')->insert($scores);
    }
}
