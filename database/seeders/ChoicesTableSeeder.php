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

            // Quiz 4: SDGsが採択されたのは何年ですか？
            ['quiz_id' => 4, 'choice' => '2015年', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 4, 'choice' => '2010年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 4, 'choice' => '2020年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 4, 'choice' => '2012年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 5: SDGsの達成目標年は何年ですか？
            ['quiz_id' => 5, 'choice' => '2030年', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 5, 'choice' => '2025年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 5, 'choice' => '2035年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 5, 'choice' => '2040年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 6: SDGsの目標2は何ですか？
            ['quiz_id' => 6, 'choice' => '飢餓をゼロに', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 6, 'choice' => 'すべての人に健康と福祉を', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 6, 'choice' => '質の高い教育をみんなに', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 6, 'choice' => 'ジェンダー平等を実現しよう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 7: SDGsの目標3は何ですか？
            ['quiz_id' => 7, 'choice' => 'すべての人に健康と福祉を', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 7, 'choice' => '飢餓をゼロに', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 7, 'choice' => '質の高い教育をみんなに', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 7, 'choice' => 'ジェンダー平等を実現しよう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 8: SDGsの目標4は何ですか？
            ['quiz_id' => 8, 'choice' => '質の高い教育をみんなに', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 8, 'choice' => 'すべての人に健康と福祉を', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 8, 'choice' => 'ジェンダー平等を実現しよう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 8, 'choice' => '安全な水とトイレを世界中に', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 9: SDGsの目標5は何ですか？
            ['quiz_id' => 9, 'choice' => 'ジェンダー平等を実現しよう', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 9, 'choice' => '質の高い教育をみんなに', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 9, 'choice' => '安全な水とトイレを世界中に', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 9, 'choice' => 'エネルギーをみんなに そしてクリーンに', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 10: SDGsの目標6は何ですか？
            ['quiz_id' => 10, 'choice' => '安全な水とトイレを世界中に', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 10, 'choice' => 'ジェンダー平等を実現しよう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 10, 'choice' => 'エネルギーをみんなに そしてクリーンに', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 10, 'choice' => '働きがいも経済成長も', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // 中級レベルの選択肢
            // Quiz 11: SDGsの目標7で重要視されているエネルギー源
            ['quiz_id' => 11, 'choice' => '再生可能エネルギー', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 11, 'choice' => '石炭エネルギー', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 11, 'choice' => '石油エネルギー', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 11, 'choice' => '天然ガス', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 12: SDGsの目標8は何ですか？
            ['quiz_id' => 12, 'choice' => '働きがいも経済成長も', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 12, 'choice' => 'エネルギーをみんなに そしてクリーンに', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 12, 'choice' => '産業と技術革新の基盤をつくろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 12, 'choice' => '人や国の不平等をなくそう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 13: SDGsの目標9は何ですか？
            ['quiz_id' => 13, 'choice' => '産業と技術革新の基盤をつくろう', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 13, 'choice' => '働きがいも経済成長も', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 13, 'choice' => '人や国の不平等をなくそう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 13, 'choice' => '住み続けられるまちづくりを', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 14: SDGsの目標10は何ですか？
            ['quiz_id' => 14, 'choice' => '人や国の不平等をなくそう', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 14, 'choice' => '産業と技術革新の基盤をつくろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 14, 'choice' => '住み続けられるまちづくりを', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 14, 'choice' => 'つくる責任 つかう責任', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 15: SDGsの目標11は何ですか？
            ['quiz_id' => 15, 'choice' => '住み続けられるまちづくりを', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 15, 'choice' => '人や国の不平等をなくそう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 15, 'choice' => 'つくる責任 つかう責任', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 15, 'choice' => '気候変動に具体的な対策を', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 16: SDGsの目標12は何ですか？
            ['quiz_id' => 16, 'choice' => 'つくる責任 つかう責任', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 16, 'choice' => '住み続けられるまちづくりを', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 16, 'choice' => '気候変動に具体的な対策を', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 16, 'choice' => '海の豊かさを守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 17: SDGsの目標13は何ですか？
            ['quiz_id' => 17, 'choice' => '気候変動に具体的な対策を', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 17, 'choice' => 'つくる責任 つかう責任', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 17, 'choice' => '海の豊かさを守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 17, 'choice' => '陸の豊かさも守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 18: SDGsの目標14で特に問題となっているもの
            ['quiz_id' => 18, 'choice' => '海洋プラスチック汚染', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 18, 'choice' => '海洋の温度上昇のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 18, 'choice' => '漁業権の問題のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 18, 'choice' => '海運業の発展', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 19: SDGsの目標15は何ですか？
            ['quiz_id' => 19, 'choice' => '陸の豊かさも守ろう', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 19, 'choice' => '海の豊かさを守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 19, 'choice' => '気候変動に具体的な対策を', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 19, 'choice' => '平和と公正をすべての人に', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 20: SDGsの目標16は何ですか？
            ['quiz_id' => 20, 'choice' => '平和と公正をすべての人に', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 20, 'choice' => '陸の豊かさも守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 20, 'choice' => 'パートナーシップで目標を達成しよう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 20, 'choice' => '海の豊かさを守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // 上級レベルの選択肢
            // Quiz 21: SDGsの目標17が重要な理由
            ['quiz_id' => 21, 'choice' => '多様なステークホルダーとの連携が不可欠だから', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 21, 'choice' => '政府だけで解決できるから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 21, 'choice' => '企業だけで対応可能だから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 21, 'choice' => '国際機関のみが重要だから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 22: 「誰一人取り残さない」の英語表現
            ['quiz_id' => 22, 'choice' => 'Leave No One Behind', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 22, 'choice' => 'Help Everyone Together', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 22, 'choice' => 'Include All People', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 22, 'choice' => 'Support Every Person', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 23: MDGsの実施期間
            ['quiz_id' => 23, 'choice' => '2000年〜2015年', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 23, 'choice' => '1990年〜2005年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 23, 'choice' => '2005年〜2020年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 23, 'choice' => '1995年〜2010年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 24: SDGsのターゲット数
            ['quiz_id' => 24, 'choice' => '169個', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 24, 'choice' => '150個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 24, 'choice' => '200個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 24, 'choice' => '180個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 25: SDGsのインディケーター数
            ['quiz_id' => 25, 'choice' => '232個', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 25, 'choice' => '200個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 25, 'choice' => '250個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 25, 'choice' => '300個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 26: 「Transforming our world」文書
            ['quiz_id' => 26, 'choice' => '我々の世界を変革する：持続可能な開発のための2030アジェンダ', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 26, 'choice' => 'パリ協定', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 26, 'choice' => 'ミレニアム宣言', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 26, 'choice' => '国連憲章', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 27: 5つのP
            ['quiz_id' => 27, 'choice' => 'People, Planet, Prosperity, Peace, Partnership', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 27, 'choice' => 'Poverty, Planet, Progress, Peace, Partnership', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 27, 'choice' => 'People, Progress, Prosperity, Peace, Partnership', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 27, 'choice' => 'People, Planet, Progress, Peace, Partnership', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 28: HLPF
            ['quiz_id' => 28, 'choice' => 'HLPF（持続可能な開発に関するハイレベル政治フォーラム）', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 28, 'choice' => '国連総会', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 28, 'choice' => '経済社会理事会', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 28, 'choice' => '国連環境計画', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 29: 多国間主義の重要性
            ['quiz_id' => 29, 'choice' => '地球規模の課題解決には国境を越えた協力が不可欠だから', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 29, 'choice' => '各国が独自に対応すれば十分だから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 29, 'choice' => '先進国だけで解決できるから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 29, 'choice' => '国際機関が主導すれば十分だから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 30: 統合的アプローチの重要性
            ['quiz_id' => 30, 'choice' => '17の目標は相互に関連しており、総合的な視点での実施が必要だから', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 30, 'choice' => '各目標を個別に対応すれば十分だから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 30, 'choice' => '重要な目標だけに集中すれば良いから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 30, 'choice' => '経済的な目標を優先すれば良いから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('choices')->insert($choices);
    }
}
