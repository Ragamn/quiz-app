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
            // 初級レベル Quiz 1-15の選択肢
            // Quiz 1: SDGsは何の略称ですか？
            ['quiz_id' => 1, 'choice' => 'Sustainable Development Goals', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 1, 'choice' => 'Social Development Goals', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 1, 'choice' => 'Strategic Development Goals', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 1, 'choice' => 'Scientific Development Goals', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 2: SDGsは全部で何個の目標がありますか？
            ['quiz_id' => 2, 'choice' => '17個', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 2, 'choice' => '15個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 2, 'choice' => '20個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 2, 'choice' => '12個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 3: SDGsが採択されたのは何年ですか？
            ['quiz_id' => 3, 'choice' => '2015年', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 3, 'choice' => '2010年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 3, 'choice' => '2020年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 3, 'choice' => '2012年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 4: SDGsの達成目標年は何年ですか？
            ['quiz_id' => 4, 'choice' => '2030年', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 4, 'choice' => '2025年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 4, 'choice' => '2035年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 4, 'choice' => '2040年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 5: SDGsの目標1は何ですか？
            ['quiz_id' => 5, 'choice' => '貧困をなくそう', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 5, 'choice' => '飢餓をゼロに', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 5, 'choice' => 'すべての人に健康と福祉を', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 5, 'choice' => '質の高い教育をみんなに', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 6: SDGsの目標2は何ですか？
            ['quiz_id' => 6, 'choice' => '飢餓をゼロに', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 6, 'choice' => '貧困をなくそう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 6, 'choice' => 'すべての人に健康と福祉を', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
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

            // Quiz 11: SDGsの目標17は何ですか？
            ['quiz_id' => 11, 'choice' => 'パートナーシップで目標を達成しよう', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 11, 'choice' => '平和と公正をすべての人に', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 11, 'choice' => '陸の豊かさも守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 11, 'choice' => '海の豊かさを守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 12: SDGsはどの国際機関で採択されましたか？
            ['quiz_id' => 12, 'choice' => '国連（国際連合）', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 12, 'choice' => 'WHO（世界保健機関）', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 12, 'choice' => 'IMF（国際通貨基金）', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 12, 'choice' => 'World Bank（世界銀行）', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 13: SDGsは何カ国で採択されましたか？
            ['quiz_id' => 13, 'choice' => '193カ国', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 13, 'choice' => '180カ国', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 13, 'choice' => '200カ国', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 13, 'choice' => '150カ国', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 14: SDGsのスローガン「誰一人取り残さない」を英語で何といいますか？
            ['quiz_id' => 14, 'choice' => 'Leave No One Behind', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 14, 'choice' => 'Help Everyone Together', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 14, 'choice' => 'Include All People', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 14, 'choice' => 'Support Every Person', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 15: SDGsで「持続可能」を英語で何といいますか？
            ['quiz_id' => 15, 'choice' => 'Sustainable', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 15, 'choice' => 'Continuous', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 15, 'choice' => 'Permanent', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 15, 'choice' => 'Stable', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // 中級レベル Quiz 16-30の選択肢
            // Quiz 16: SDGsの目標1で対象となる貧困の基準は1日何ドル未満ですか？
            ['quiz_id' => 16, 'choice' => '1.90ドル', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 16, 'choice' => '2.50ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 16, 'choice' => '1.50ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 16, 'choice' => '3.00ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 17: SDGsの目標2「飢餓をゼロに」で重要な概念は何ですか？
            ['quiz_id' => 17, 'choice' => '食料安全保障', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 17, 'choice' => '食料輸出', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 17, 'choice' => '食料価格', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 17, 'choice' => '食料配布', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 18: SDGsの目標3で対象となる年齢層は？
            ['quiz_id' => 18, 'choice' => 'あらゆる年齢のすべての人々', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 18, 'choice' => '子どもと高齢者のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 18, 'choice' => '18歳以上の成人', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 18, 'choice' => '働く世代のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 19: SDGsの目標4で重視される教育の質とは？
            ['quiz_id' => 19, 'choice' => '包摂的かつ公正な質の高い教育', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 19, 'choice' => '高等教育のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 19, 'choice' => '職業訓練のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 19, 'choice' => '基礎教育のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 20: SDGsの目標5で対象となる性別は？
            ['quiz_id' => 20, 'choice' => 'すべての女性及び女児', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 20, 'choice' => '成人女性のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 20, 'choice' => '働く女性のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 20, 'choice' => '少女のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 21: SDGsの目標7で重要視されているエネルギー源は何ですか？
            ['quiz_id' => 21, 'choice' => '再生可能エネルギー', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 21, 'choice' => '化石燃料', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 21, 'choice' => '原子力エネルギー', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 21, 'choice' => '石炭エネルギー', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 22: SDGsの目標8における強制労働の撲滅期限は？
            ['quiz_id' => 22, 'choice' => '2025年までに児童労働、2030年までに強制労働', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 22, 'choice' => '2030年までにすべて', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 22, 'choice' => '2025年までにすべて', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 22, 'choice' => '2035年までにすべて', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 23: SDGsの目標9におけるインフラ開発で重視される要素は？
            ['quiz_id' => 23, 'choice' => '信頼でき、持続可能かつ強靱で質の高いインフラ', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 23, 'choice' => '低コストなインフラのみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 23, 'choice' => '大規模なインフラのみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 23, 'choice' => '都市部のインフラのみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 24: SDGsの目標10で対象となる所得格差の指標は？
            ['quiz_id' => 24, 'choice' => '所得下位40%の所得成長率', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 24, 'choice' => '所得上位10%の所得', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 24, 'choice' => '平均所得の向上', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 24, 'choice' => '最低賃金の設定', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 25: SDGsの目標11における都市人口の安全な住宅確保の期限は？
            ['quiz_id' => 25, 'choice' => '2030年', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 25, 'choice' => '2025年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 25, 'choice' => '2035年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 25, 'choice' => '2040年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 26: SDGsの目標12における食料廃棄の削減目標は？
            ['quiz_id' => 26, 'choice' => '2030年までに半減', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 26, 'choice' => '2025年までに半減', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 26, 'choice' => '2030年までに完全撲滅', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 26, 'choice' => '2035年までに半減', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 27: SDGsの目標13における気候変動対策で重要な要素は？
            ['quiz_id' => 27, 'choice' => '緩和と適応の両方', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 27, 'choice' => '緩和のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 27, 'choice' => '適応のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 27, 'choice' => '予防のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 28: SDGsの目標14「海の豊かさを守ろう」において、特に問題となっているのは何ですか？
            ['quiz_id' => 28, 'choice' => '海洋プラスチック汚染、過剰漁業、海洋酸性化', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 28, 'choice' => '海洋プラスチック汚染のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 28, 'choice' => '過剰漁業のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 28, 'choice' => '海洋酸性化のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 29: SDGsの目標15における森林減少の阻止期限は？
            ['quiz_id' => 29, 'choice' => '2020年（継続的な取り組みが必要）', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 29, 'choice' => '2030年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 29, 'choice' => '2025年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 29, 'choice' => '2035年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 30: SDGsの目標16における汚職の撲滅手段は？
            ['quiz_id' => 30, 'choice' => '効果的で説明責任のある透明な制度の構築', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 30, 'choice' => '法律の厳罰化のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 30, 'choice' => '監視カメラの設置', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 30, 'choice' => '公務員の削減', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // 上級レベル Quiz 31-45の選択肢
            // Quiz 31: SDGsの前身となったMDGs（ミレニアム開発目標）は何年から何年まで実施されましたか？
            ['quiz_id' => 31, 'choice' => '2000年〜2015年', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 31, 'choice' => '1990年〜2005年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 31, 'choice' => '2005年〜2020年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 31, 'choice' => '1995年〜2010年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 32: SDGsのターゲット（具体的目標）は全部でいくつありますか？
            ['quiz_id' => 32, 'choice' => '169個', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 32, 'choice' => '150個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 32, 'choice' => '200個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 32, 'choice' => '180個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 33: SDGsの理念「誰一人取り残さない」を英語で何といいますか？
            ['quiz_id' => 33, 'choice' => 'Leave No One Behind', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 33, 'choice' => 'Help Everyone Together', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 33, 'choice' => 'Include All People', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 33, 'choice' => 'Support Every Person', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 34: SDGsを推進する国連文書の正式名称は何ですか？
            ['quiz_id' => 34, 'choice' => '持続可能な開発のための2030アジェンダ', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 34, 'choice' => '持続可能な開発目標2030', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 34, 'choice' => '国連持続可能開発宣言', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 34, 'choice' => 'ミレニアム開発目標2030', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 35: SDGsの5つのP（Five Ps）とは何ですか？
            ['quiz_id' => 35, 'choice' => 'People, Planet, Prosperity, Peace, Partnership', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 35, 'choice' => 'Poverty, Planet, Progress, Peace, Partnership', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 35, 'choice' => 'People, Progress, Prosperity, Peace, Partnership', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 35, 'choice' => 'People, Planet, Progress, Peace, Partnership', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 36: SDGsにおける「多国間主義」が重要視される理由は何ですか？
            ['quiz_id' => 36, 'choice' => '地球規模の課題解決には国境を越えた協力が不可欠', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 36, 'choice' => '各国の主権を尊重するため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 36, 'choice' => '経済効率を向上させるため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 36, 'choice' => '文化交流を促進するため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 37: SDGsの実施において「統合的アプローチ」が重要な理由は何ですか？
            ['quiz_id' => 37, 'choice' => '17の目標は相互に関連している', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 37, 'choice' => '効率性を重視するため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 37, 'choice' => 'コストを削減するため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 37, 'choice' => '管理を簡素化するため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 38: SDGsにおける「トリプルボトムライン」とは何ですか？
            ['quiz_id' => 38, 'choice' => '経済、社会、環境の3つの側面', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 38, 'choice' => '政治、経済、社会の3つの側面', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 38, 'choice' => '技術、文化、環境の3つの側面', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 38, 'choice' => '教育、健康、環境の3つの側面', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 39: SDGsにおける「Data Revolution」とは何ですか？
            ['quiz_id' => 39, 'choice' => 'データ駆動型でSDGsの進捗を測定・監視するアプローチ', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 39, 'choice' => 'ビッグデータの活用のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 39, 'choice' => 'AIによる自動化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 39, 'choice' => 'デジタル技術の普及', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 40: SDGsの実施における「VNR」とは何の略ですか？
            ['quiz_id' => 40, 'choice' => 'Voluntary National Review', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 40, 'choice' => 'Verified National Report', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 40, 'choice' => 'Virtual National Resource', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 40, 'choice' => 'Validated National Registry', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 41: SDGsにおける「ローカライゼーション」とは何ですか？
            ['quiz_id' => 41, 'choice' => 'グローバルな目標を地域レベルに適応させること', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 41, 'choice' => '地域の言語に翻訳すること', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 41, 'choice' => '地域経済の活性化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 41, 'choice' => '地方分権の推進', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 42: SDGsの進捗測定における「Tier分類」とは何ですか？
            ['quiz_id' => 42, 'choice' => '方法論の確立度とデータ利用可能性による分類', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 42, 'choice' => '重要度による分類', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 42, 'choice' => '実施難易度による分類', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 42, 'choice' => '地域による分類', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 43: SDGsにおける「サイエンス・ポリシー・インターフェース」とは？
            ['quiz_id' => 43, 'choice' => '科学的知見と政策決定を橋渡しする仕組み', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 43, 'choice' => '科学技術の普及制度', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 43, 'choice' => '研究開発の資金調達', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 43, 'choice' => '学術論文の公開制度', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 44: SDGsの財政ギャップは年間推定何兆ドルと言われていますか？
            ['quiz_id' => 44, 'choice' => '約2.5兆ドル', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 44, 'choice' => '約1.5兆ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 44, 'choice' => '約3.5兆ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 44, 'choice' => '約4.0兆ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 45: SDGsの実施期間15年間において、中間評価が行われるのは何年ですか？
            ['quiz_id' => 45, 'choice' => '2023年', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 45, 'choice' => '2022年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 45, 'choice' => '2025年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 45, 'choice' => '2020年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('choices')->insert($choices);
    }
}
