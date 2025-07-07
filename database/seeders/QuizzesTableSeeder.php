<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quizzes = [
            // 初級レベル (level_id: 1)
            [
                'level_id' => 1,
                'question' => 'SDGsは何の略称ですか？',
                'explanation' => 'SDGsは「Sustainable Development Goals」の略で、持続可能な開発目標のことです。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsは全部で何個の目標がありますか？',
                'explanation' => 'SDGsは17の目標から構成されており、2030年までの達成を目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標1「貧困をなくそう」とは何を目指していますか？',
                'explanation' => 'あらゆる場所で、あらゆる形態の貧困を終わらせることを目指しています。',
                'created_at' => now(),
            ],
            
            // 中級レベル (level_id: 2)
            [
                'level_id' => 2,
                'question' => 'SDGsの目標7「エネルギーをみんなに そしてクリーンに」で重要視されているエネルギー源は何ですか？',
                'explanation' => '再生可能エネルギーの利用拡大と、エネルギー効率の改善が重要視されています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標14「海の豊かさを守ろう」において、特に問題となっているのは何ですか？',
                'explanation' => '海洋プラスチック汚染、過剰漁業、海洋酸性化などが深刻な問題となっています。',
                'created_at' => now(),
            ],
            
            // 上級レベル (level_id: 3)
            [
                'level_id' => 3,
                'question' => 'SDGsの目標17「パートナーシップで目標を達成しよう」が重要な理由は何ですか？',
                'explanation' => 'SDGsの達成には、政府、企業、市民社会、国際機関などの多様なステークホルダーとの連携が不可欠だからです。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsの「誰一人取り残さない」という理念を英語で表現すると何ですか？',
                'explanation' => '「Leave No One Behind」という表現で、SDGsの根本的な理念を表しています。',
                'created_at' => now(),
            ],
        ];

        DB::table('quizzes')->insert($quizzes);
    }
}
