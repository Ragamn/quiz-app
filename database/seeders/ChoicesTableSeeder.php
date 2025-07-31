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

            // 初級レベル残り問題の選択肢 (Quiz 11-30)
            // Quiz 11: SDGsの目標7は何ですか？
            ['quiz_id' => 11, 'choice' => 'エネルギーをみんなに そしてクリーンに', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 11, 'choice' => '安全な水とトイレを世界中に', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 11, 'choice' => '働きがいも経済成長も', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 11, 'choice' => '産業と技術革新の基盤をつくろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

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

            // Quiz 18: SDGsの目標14は何ですか？
            ['quiz_id' => 18, 'choice' => '海の豊かさを守ろう', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 18, 'choice' => '気候変動に具体的な対策を', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 18, 'choice' => '陸の豊かさも守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 18, 'choice' => '平和と公正をすべての人に', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 19: SDGsの目標15は何ですか？
            ['quiz_id' => 19, 'choice' => '陸の豊かさも守ろう', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 19, 'choice' => '海の豊かさを守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 19, 'choice' => '平和と公正をすべての人に', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 19, 'choice' => 'パートナーシップで目標を達成しよう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 20: SDGsの目標16は何ですか？
            ['quiz_id' => 20, 'choice' => '平和と公正をすべての人に', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 20, 'choice' => '陸の豊かさも守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 20, 'choice' => 'パートナーシップで目標を達成しよう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 20, 'choice' => '気候変動に具体的な対策を', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 21: SDGsの目標17は何ですか？
            ['quiz_id' => 21, 'choice' => 'パートナーシップで目標を達成しよう', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 21, 'choice' => '平和と公正をすべての人に', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 21, 'choice' => '陸の豊かさも守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 21, 'choice' => '海の豊かさを守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 22: SDGsのロゴに使われている色は何色ですか？
            ['quiz_id' => 22, 'choice' => '17色', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 22, 'choice' => '12色', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 22, 'choice' => '20色', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 22, 'choice' => '15色', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 23: SDGsが国連で採択された月は何月ですか？
            ['quiz_id' => 23, 'choice' => '9月', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 23, 'choice' => '6月', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 23, 'choice' => '12月', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 23, 'choice' => '3月', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 24: SDGsの正式名称に含まれる年数は何年ですか？
            ['quiz_id' => 24, 'choice' => '2030年', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 24, 'choice' => '2025年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 24, 'choice' => '2035年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 24, 'choice' => '2040年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 25: SDGsで「持続可能」を英語で表現すると何ですか？
            ['quiz_id' => 25, 'choice' => 'Sustainable', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 25, 'choice' => 'Continuous', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 25, 'choice' => 'Permanent', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 25, 'choice' => 'Stable', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 26: SDGsの目標1で対象となる貧困の基準は1日何ドル未満ですか？
            ['quiz_id' => 26, 'choice' => '1.90ドル', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 26, 'choice' => '2.50ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 26, 'choice' => '1.50ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 26, 'choice' => '3.00ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 27: SDGsの目標2「飢餓をゼロに」で重要な概念は何ですか？
            ['quiz_id' => 27, 'choice' => '食料安全保障', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 27, 'choice' => '食料輸出', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 27, 'choice' => '食料価格', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 27, 'choice' => '食料配布', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 28: SDGsの目標3で対象となる年齢層は？
            ['quiz_id' => 28, 'choice' => 'あらゆる年齢のすべての人々', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 28, 'choice' => '子どもと高齢者のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 28, 'choice' => '18歳以上の成人', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 28, 'choice' => '働く世代のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 29: SDGsの目標4で重視される教育の質とは？
            ['quiz_id' => 29, 'choice' => '包摂的かつ公正な質の高い教育', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 29, 'choice' => '高等教育のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 29, 'choice' => '職業訓練のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 29, 'choice' => '基礎教育のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 30: SDGsの目標5で対象となる性別は？
            ['quiz_id' => 30, 'choice' => 'すべての女性及び女児', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 30, 'choice' => '成人女性のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 30, 'choice' => '働く女性のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 30, 'choice' => '少女のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // 中級レベルの選択肢 (Quiz 31-60)
            // Quiz 31: SDGsの目標7で重要視されているエネルギー源
            ['quiz_id' => 31, 'choice' => '再生可能エネルギー', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 31, 'choice' => '石炭エネルギー', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 31, 'choice' => '石油エネルギー', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 31, 'choice' => '天然ガス', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 32-50の選択肢（中級問題）
            ['quiz_id' => 32, 'choice' => '働きがいも経済成長も', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 32, 'choice' => 'エネルギーをみんなに そしてクリーンに', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 32, 'choice' => '産業と技術革新の基盤をつくろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 32, 'choice' => '人や国の不平等をなくそう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 33, 'choice' => '産業と技術革新の基盤をつくろう', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 33, 'choice' => '働きがいも経済成長も', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 33, 'choice' => '人や国の不平等をなくそう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 33, 'choice' => '住み続けられるまちづくりを', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 34, 'choice' => '人や国の不平等をなくそう', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 34, 'choice' => '産業と技術革新の基盤をつくろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 34, 'choice' => '住み続けられるまちづくりを', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 34, 'choice' => 'つくる責任 つかう責任', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 35, 'choice' => '住み続けられるまちづくりを', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 35, 'choice' => '人や国の不平等をなくそう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 35, 'choice' => 'つくる責任 つかう責任', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 35, 'choice' => '気候変動に具体的な対策を', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 36, 'choice' => 'つくる責任 つかう責任', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 36, 'choice' => '住み続けられるまちづくりを', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 36, 'choice' => '気候変動に具体的な対策を', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 36, 'choice' => '海の豊かさを守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 37, 'choice' => '気候変動に具体的な対策を', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 37, 'choice' => 'つくる責任 つかう責任', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 37, 'choice' => '海の豊かさを守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 37, 'choice' => '陸の豊かさも守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 38, 'choice' => '海洋プラスチック汚染、過剰漁業、海洋酸性化', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 38, 'choice' => '海洋の温度上昇のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 38, 'choice' => '漁業権の問題のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 38, 'choice' => '海運業の発展', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 39, 'choice' => '陸の豊かさも守ろう', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 39, 'choice' => '海の豊かさを守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 39, 'choice' => '気候変動に具体的な対策を', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 39, 'choice' => '平和と公正をすべての人に', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 40, 'choice' => '平和と公正をすべての人に', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 40, 'choice' => '陸の豊かさも守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 40, 'choice' => 'パートナーシップで目標を達成しよう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 40, 'choice' => '海の豊かさを守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 41-50の選択肢
            ['quiz_id' => 41, 'choice' => '開発途上国への政府開発援助（ODA）、民間投資、技術移転', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 41, 'choice' => '政府援助のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 41, 'choice' => '民間投資のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 41, 'choice' => '技術移転のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 42, 'choice' => '2030年までに極度の貧困を撲滅', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 42, 'choice' => '2025年まで', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 42, 'choice' => '2035年まで', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 42, 'choice' => '期限なし', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 43, 'choice' => '持続可能で生産性が高く、気候変動に対応できる農業', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 43, 'choice' => '大規模な工業農業のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 43, 'choice' => '従来の農業手法の維持', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 43, 'choice' => '化学肥料の大量使用', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 44, 'choice' => '妊産婦死亡率を出生10万人当たり70人未満に削減', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 44, 'choice' => '50人未満に削減', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 44, 'choice' => '100人未満に削減', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 44, 'choice' => '具体的な数値目標はない', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 45, 'choice' => '働きがいのある人間らしい仕事に必要な技能の習得', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 45, 'choice' => '大学教育の普及のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 45, 'choice' => '理論学習の重視', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 45, 'choice' => '語学教育の強化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 46, 'choice' => '2030年までにあらゆる形態の暴力を撲滅', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 46, 'choice' => '2025年まで', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 46, 'choice' => '2035年まで', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 46, 'choice' => '具体的な期限なし', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 47, 'choice' => '汚染の減少、未処理排水の割合半減、再利用の大幅増加', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 47, 'choice' => '新しい水源の開発のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 47, 'choice' => '水の配給制度の確立', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 47, 'choice' => '水道料金の値下げ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 48, 'choice' => '再生可能エネルギーの割合を大幅に拡大', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 48, 'choice' => '原子力発電の拡大', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 48, 'choice' => '化石燃料の効率化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 48, 'choice' => 'エネルギー消費の削減のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 49, 'choice' => '2025年までに児童労働撲滅、2030年までに強制労働根絶', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 49, 'choice' => '2030年までに両方とも撲滅', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 49, 'choice' => '2025年までに両方とも撲滅', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 49, 'choice' => '具体的な期限なし', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 50, 'choice' => '信頼でき、持続可能かつ強靱で質の高いインフラ', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 50, 'choice' => '低コストなインフラのみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 50, 'choice' => '大規模なインフラのみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 50, 'choice' => '都市部のインフラのみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 51-60の選択肢（中級レベル残り）
            ['quiz_id' => 51, 'choice' => '所得下位40%の所得成長率が国内平均を上回る', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 51, 'choice' => '所得上位10%の制限', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 51, 'choice' => '最低賃金の統一', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 51, 'choice' => 'GDPの均等分配', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 52, 'choice' => '2030年までに適切、安全かつ安価な住宅の確保', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 52, 'choice' => '2025年まで', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 52, 'choice' => '2035年まで', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 52, 'choice' => '高級住宅の提供', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 53, 'choice' => '2030年までに食料廃棄を半減', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 53, 'choice' => '2025年までに廃棄をゼロに', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 53, 'choice' => '廃棄物の輸出', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 53, 'choice' => '廃棄物の燃料化のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 54, 'choice' => '気候変動の緩和、適応、影響軽減及び早期警戒に関する教育', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 54, 'choice' => '環境科学の基礎教育のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 54, 'choice' => '気象予報の精度向上', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 54, 'choice' => '温室効果ガスの測定技術', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 55, 'choice' => 'あらゆるレベルでの科学的協力の促進', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 55, 'choice' => '海洋の利用制限のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 55, 'choice' => '漁業の禁止', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 55, 'choice' => '海水の淡水化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 56, 'choice' => '2020年までに森林破壊を阻止', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 56, 'choice' => '2030年まで', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 56, 'choice' => '2025年まで', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 56, 'choice' => '期限の設定なし', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 57, 'choice' => '効果的で説明責任のある透明な制度の構築', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 57, 'choice' => '処罰の強化のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 57, 'choice' => '監視システムの強化のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 57, 'choice' => '法律の厳格化のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 58, 'choice' => '17の目標は相互に関連しているため', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 58, 'choice' => '目標が多すぎるため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 58, 'choice' => '複雑すぎるため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 58, 'choice' => '理解が困難なため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 59, 'choice' => '経済（Profit）、社会（People）、環境（Planet）', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 59, 'choice' => '政治、経済、社会', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 59, 'choice' => '教育、健康、環境', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 59, 'choice' => '技術、文化、平和', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 60, 'choice' => '国連加盟国すべて（193カ国）', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 60, 'choice' => '先進国のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 60, 'choice' => '途上国のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 60, 'choice' => 'G20諸国のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // 上級レベルの選択肢 (Quiz 61-90)
            // Quiz 61: SDGsの目標17が重要な理由
            ['quiz_id' => 61, 'choice' => '多様なステークホルダーとの連携が不可欠だから', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 61, 'choice' => '政府だけで解決できるから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 61, 'choice' => '企業だけで対応可能だから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 61, 'choice' => '国際機関のみが重要だから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 62, 'choice' => 'Leave No One Behind', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 62, 'choice' => 'Help Everyone Together', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 62, 'choice' => 'Include All People', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 62, 'choice' => 'Support Every Person', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 63, 'choice' => '2000年〜2015年', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 63, 'choice' => '1990年〜2005年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 63, 'choice' => '2005年〜2020年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 63, 'choice' => '1995年〜2010年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 64, 'choice' => '169個', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 64, 'choice' => '150個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 64, 'choice' => '200個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 64, 'choice' => '180個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 65, 'choice' => '232個', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 65, 'choice' => '200個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 65, 'choice' => '250個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 65, 'choice' => '300個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 66, 'choice' => '我々の世界を変革する：持続可能な開発のための2030アジェンダ', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 66, 'choice' => 'パリ協定', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 66, 'choice' => 'ミレニアム宣言', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 66, 'choice' => '国連憲章', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 67, 'choice' => 'People, Planet, Prosperity, Peace, Partnership', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 67, 'choice' => 'Poverty, Planet, Progress, Peace, Partnership', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 67, 'choice' => 'People, Progress, Prosperity, Peace, Partnership', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 67, 'choice' => 'People, Planet, Progress, Peace, Partnership', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 68, 'choice' => 'HLPF（持続可能な開発に関するハイレベル政治フォーラム）', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 68, 'choice' => '国連総会', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 68, 'choice' => '経済社会理事会', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 68, 'choice' => '国連環境計画', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 69, 'choice' => '地球規模の課題解決には国境を越えた協力が不可欠だから', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 69, 'choice' => '各国が独自に対応すれば十分だから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 69, 'choice' => '先進国だけで解決できるから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 69, 'choice' => '国際機関が主導すれば十分だから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 70, 'choice' => '17の目標は相互に関連しており、総合的な視点での実施が必要だから', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 70, 'choice' => '各目標を個別に対応すれば十分だから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 70, 'choice' => '重要な目標だけに集中すれば良いから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 70, 'choice' => '経済的な目標を優先すれば良いから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 71-90の選択肢（上級レベル残り）
            ['quiz_id' => 71, 'choice' => '異なる政策分野間での矛盾を避け、相乗効果を生み出す', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 71, 'choice' => '同じ政策を全世界で実施する', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 71, 'choice' => '政策の統一化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 71, 'choice' => '政策の標準化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 72, 'choice' => 'データの収集、分析、活用を革新的に改善すること', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 72, 'choice' => 'データの量を増やすこと', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 72, 'choice' => 'コンピューターの性能向上', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 72, 'choice' => 'インターネットの普及', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 73, 'choice' => 'Voluntary National Review（自発的国家レビュー）', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 73, 'choice' => 'Verified National Report', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 73, 'choice' => 'Virtual National Research', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 73, 'choice' => 'Valid National Record', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 74, 'choice' => 'ある国の政策や行動が他国のSDGs達成に与える影響', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 74, 'choice' => '国内政策の効果', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 74, 'choice' => '経済成長の影響', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 74, 'choice' => '技術革新の普及', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 75, 'choice' => '年間約2.5兆ドル', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 75, 'choice' => '年間約1.5兆ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 75, 'choice' => '年間約3.5兆ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 75, 'choice' => '年間約5兆ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 76, 'choice' => 'グローバルな目標を地域の実情に合わせて実施すること', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 76, 'choice' => '地域の文化を重視すること', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 76, 'choice' => '地方政府の権限強化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 76, 'choice' => '地域経済の発展', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 77, 'choice' => '経済成長と環境保護の間の緊張関係', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 77, 'choice' => '教育と経済成長の関係', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 77, 'choice' => '健康と平和の関係', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 77, 'choice' => 'ジェンダー平等と教育の関係', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 78, 'choice' => '複数のSDGs目標の達成を同時に促進する触媒的な政策や投資', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 78, 'choice' => '目標達成を遅らせる要因', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 78, 'choice' => '資金調達の手段', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 78, 'choice' => '国際協力の枠組み', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 79, 'choice' => '水・エネルギー・食料などの相互関連する分野を統合的に管理', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 79, 'choice' => '各分野を個別に管理', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 79, 'choice' => '技術革新の推進', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 79, 'choice' => '規制の強化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 80, 'choice' => '人間の福祉、持続可能な経済、地球システム', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 80, 'choice' => '政治、経済、社会', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 80, 'choice' => '教育、健康、環境', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 80, 'choice' => '技術、文化、平和', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 81, 'choice' => '方法論の確立度とデータ利用可能性に基づく分類', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 81, 'choice' => '重要度による分類', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 81, 'choice' => '実施難易度による分類', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 81, 'choice' => '費用対効果による分類', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 82, 'choice' => '科学的知見と政策決定を橋渡しする仕組み', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 82, 'choice' => '科学研究の資金調達制度', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 82, 'choice' => '政策立案者の教育制度', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 82, 'choice' => '科学技術の普及制度', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 83, 'choice' => '相互作用や動的な関係性を理解して根本的な変化を促すため', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 83, 'choice' => '問題を単純化するため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 83, 'choice' => '効率を重視するため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 83, 'choice' => 'コストを削減するため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 84, 'choice' => 'SDGsの環境目標設定の科学的基盤となっている', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 84, 'choice' => '関係がない', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 84, 'choice' => '対立する概念である', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 84, 'choice' => '補完的な役割を果たす', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 85, 'choice' => '社会基盤の確保と地球環境の限界内での経済活動を両立させる経済モデル', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 85, 'choice' => '循環型経済のモデル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 85, 'choice' => 'グリーン経済のモデル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 85, 'choice' => 'デジタル経済のモデル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 86, 'choice' => 'ショックやストレスに対する回復力と適応力', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 86, 'choice' => '変化への抵抗力', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 86, 'choice' => '成長のスピード', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 86, 'choice' => '安定性の維持', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 87, 'choice' => 'SDGs達成に必要な技術革新を促進する環境整備が不可欠だから', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 87, 'choice' => '技術開発にのみ集中すれば良いから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 87, 'choice' => '従来技術で十分だから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 87, 'choice' => '技術よりも資金が重要だから', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 88, 'choice' => 'ある分野での変化が他の分野に連鎖的に影響を与える現象', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 88, 'choice' => '段階的な変化のプロセス', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 88, 'choice' => '急激な変化の現象', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 88, 'choice' => '反復的な変化のパターン', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 89, 'choice' => '労働者や地域社会への影響を最小化し、公正な移行を実現すること', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 89, 'choice' => '環境規制の強化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 89, 'choice' => '経済成長の優先', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 89, 'choice' => '技術革新の推進', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            ['quiz_id' => 90, 'choice' => '15年間（2015年から2030年まで）', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 90, 'choice' => '10年間', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 90, 'choice' => '20年間', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 90, 'choice' => '25年間', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('choices')->insert($choices);
    }
}
