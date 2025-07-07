<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $choices = [
            // Quiz 1: SDGsは何の略称ですか？
            ['quiz_id' => 1, 'choice' => 'Sustainable Development Goals', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 1, 'choice' => 'Social Development Goals', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 1, 'choice' => 'Scientific Development Goals', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 1, 'choice' => 'Strategic Development Goals', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 2: SDGsは全部で何個の目標がありますか？
            ['quiz_id' => 2, 'choice' => '17個', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 2, 'choice' => '15個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 2, 'choice' => '20個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 2, 'choice' => '12個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 3: SDGsの目標1「貧困をなくそう」とは何を目指していますか？
            ['quiz_id' => 3, 'choice' => 'あらゆる場所で、あらゆる形態の貧困を終わらせる', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 3, 'choice' => '発展途上国の貧困だけを解決する', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 3, 'choice' => '経済的貧困のみを解決する', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 3, 'choice' => '先進国の貧困問題を優先する', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 4: SDGsの目標7で重要視されているエネルギー源
            ['quiz_id' => 4, 'choice' => '再生可能エネルギー', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 4, 'choice' => '石炭エネルギー', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 4, 'choice' => '石油エネルギー', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 4, 'choice' => '天然ガス', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 5: SDGsの目標14で特に問題となっているもの
            ['quiz_id' => 5, 'choice' => '海洋プラスチック汚染', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 5, 'choice' => '海洋の温度上昇のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 5, 'choice' => '漁業権の問題のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 5, 'choice' => '海運業の発展', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 6: SDGsの目標17が重要な理由
            ['quiz_id' => 6, 'choice' => '多様なステークホルダーとの連携が不可欠だから', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 6, 'choice' => '政府だけで解決できるから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 6, 'choice' => '企業だけで対応可能だから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 6, 'choice' => '国際機関のみが重要だから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 7: 「誰一人取り残さない」の英語表現
            ['quiz_id' => 7, 'choice' => 'Leave No One Behind', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 7, 'choice' => 'Help Everyone Together', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 7, 'choice' => 'Include All People', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 7, 'choice' => 'Support Every Person', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('choices')->insert($choices);
    }
}
