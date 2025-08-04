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
            // --- 初級レベル (Quiz 1-15) ---
            // Quiz 1: SDGsは何の略称ですか？
            ['quiz_id' => 1, 'choice' => 'Sustainable Development Goals', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 1, 'choice' => 'Social Diversity Goals', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 1, 'choice' => 'Strategic Development Group', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 1, 'choice' => 'Systematic Design Guidelines', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 2: SDGsには全部でいくつの目標がありますか？
            ['quiz_id' => 2, 'choice' => '17個', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 2, 'choice' => '8個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 2, 'choice' => '25個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 2, 'choice' => '30個', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 3: SDGsが国連で採択されたのは何年ですか？
            ['quiz_id' => 3, 'choice' => '2015年', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 3, 'choice' => '2000年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 3, 'choice' => '2010年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 3, 'choice' => '2020年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 4: SDGsの達成を目指す目標年（期限）は何年ですか？
            ['quiz_id' => 4, 'choice' => '2030年', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 4, 'choice' => '2025年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 4, 'choice' => '2045年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 4, 'choice' => '期限はない', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 5: SDGsが掲げる中心的な理念「誰一人取り残さない」を英語で何と言いますか？
            ['quiz_id' => 5, 'choice' => 'Leave No One Behind', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 5, 'choice' => 'All for One, One for All', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 5, 'choice' => 'No More Poverty', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 5, 'choice' => 'We Are the World', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 6: SDGsの目標1「貧困をなくそう」は、どのような貧困をなくすことを目指していますか？
            ['quiz_id' => 6, 'choice' => 'あらゆる形態の貧困', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 6, 'choice' => '開発途上国の貧困のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 6, 'choice' => '経済的な貧困のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 6, 'choice' => '子どもの貧困のみ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 7: SDGsの目標2は「飢餓をゼロに」ですが、何を目指していますか？
            ['quiz_id' => 7, 'choice' => '食料の安定確保と栄養改善', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 7, 'choice' => '高級食材の生産', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 7, 'choice' => '食料の輸入自由化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 7, 'choice' => 'ダイエットの推進', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 8: SDGsの目標5は何ですか？
            ['quiz_id' => 8, 'choice' => 'ジェンダー平等を実現しよう', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 8, 'choice' => '質の高い教育をみんなに', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 8, 'choice' => '人や国の不平等をなくそう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 8, 'choice' => '平和と公正をすべての人に', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 9: SDGsの目標6「安全な水とトイレを世界中に」が目指すことは何ですか？
            ['quiz_id' => 9, 'choice' => '安全な水と衛生へのアクセス確保', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 9, 'choice' => 'ミネラルウォーターの配布', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 9, 'choice' => 'すべての川の浄化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 9, 'choice' => '水洗トイレの義務化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 10: SDGsの目標7「エネルギーをみんなに そしてクリーンに」が目指すことは何ですか？
            ['quiz_id' => 10, 'choice' => 'クリーンなエネルギーの確保', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 10, 'choice' => '電気料金の無料化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 10, 'choice' => '化石燃料の増産', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 10, 'choice' => '原子力発電所の廃止', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 11: SDGsの目標11「住み続けられるまちづくりを」が目指すことは何ですか？
            ['quiz_id' => 11, 'choice' => '安全で災害に強い都市開発', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 11, 'choice' => 'すべての建物の高層化', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 11, 'choice' => '歴史的建造物の解体', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 11, 'choice' => '人口の地方分散', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 12: SDGsの目標12は何ですか？
            ['quiz_id' => 12, 'choice' => 'つくる責任 つかう責任', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 12, 'choice' => '働きがいも経済成長も', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 12, 'choice' => '海の豊かさを守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 12, 'choice' => '産業と技術革新の基盤をつくろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 13: SDGsの目標13は何ですか？
            ['quiz_id' => 13, 'choice' => '気候変動に具体的な対策を', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 13, 'choice' => '陸の豊かさも守ろう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 13, 'choice' => 'エネルギーをみんなに そしてクリーンに', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 13, 'choice' => '安全な水とトイレを世界中に', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 14: SDGsの目標14「海の豊かさを守ろう」が問題視していることは次のうちどれですか？
            ['quiz_id' => 14, 'choice' => '海洋プラスチックごみ問題', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 14, 'choice' => '海水浴客の減少', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 14, 'choice' => '海賊行為の増加', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 14, 'choice' => '津波の発生', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 15: SDGsの目標17は何ですか？
            ['quiz_id' => 15, 'choice' => 'パートナーシップで目標を達成しよう', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 15, 'choice' => '平和と公正をすべての人に', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 15, 'choice' => '人や国の不平等をなくそう', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 15, 'choice' => 'すべての人に健康と福祉を', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // --- 中級レベル (Quiz 16-30) ---
            // Quiz 16: SDGsの目標1で定義される「極度の貧困」とは、1日あたりの生活費が何ドル未満の状態を指しますか？
            ['quiz_id' => 16, 'choice' => '1.90ドル', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 16, 'choice' => '5.00ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 16, 'choice' => '10.00ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 16, 'choice' => '0.50ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 17: SDGsの目標4「質の高い教育をみんなに」で特に重視されている教育の機会とは何ですか？
            ['quiz_id' => 17, 'choice' => '生涯学習の機会', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 17, 'choice' => 'エリート教育の機会', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 17, 'choice' => 'オンライン教育の機会', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 17, 'choice' => '無償の大学教育の機会', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 18: SDGsの目標5「ジェンダー平等を実現しよう」で撤廃を目指す、特に有害な慣行として挙げられているものは次のうちどれですか？
            ['quiz_id' => 18, 'choice' => '児童婚・強制婚', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 18, 'choice' => '女性の夜間労働', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 18, 'choice' => '男女別の学校教育', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 18, 'choice' => '一夫多妻制', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 19: SDGsの目標7で利用の拡大が目標とされている「再生可能エネルギー」に当てはまらないものはどれですか？
            ['quiz_id' => 19, 'choice' => '原子力', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 19, 'choice' => '太陽光', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 19, 'choice' => '風力', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 19, 'choice' => '地熱', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 20: SDGsの目標8には「ディーセント・ワーク」という概念があります。これはどのような意味ですか？
            ['quiz_id' => 20, 'choice' => '働きがいのある人間らしい仕事', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 20, 'choice' => '高収入の仕事', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 20, 'choice' => '在宅でできる仕事', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 20, 'choice' => '定時で帰れる仕事', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 21: SDGsの目標9「産業と技術革新の基盤をつくろう」で、特に開発が重要視されているインフラの要素は何ですか？
            ['quiz_id' => 21, 'choice' => '強靱性（レジリエンス）', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 21, 'choice' => 'デザイン性', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 21, 'choice' => '歴史的価値', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 21, 'choice' => '経済効率性', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 22: SDGsの目標10「人や国の不平等をなくそう」で、是正を目指す格差の指標として具体的なターゲットがあるのはどれですか？
            ['quiz_id' => 22, 'choice' => '所得格差', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 22, 'choice' => '教育格差', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 22, 'choice' => '情報格差', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 22, 'choice' => '世代間格差', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 23: SDGsの目標11における「スラム」の改善目標の期限は何年ですか？
            ['quiz_id' => 23, 'choice' => '2030年', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 23, 'choice' => '2025年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 23, 'choice' => '2040年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 23, 'choice' => '2050年', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 24: SDGsの目標12「つくる責任 つかう責任」における、世界全体の食料廃棄を半減させる目標の対象レベルはどれですか？
            ['quiz_id' => 24, 'choice' => '小売・消費レベル', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 24, 'choice' => '生産・収穫レベル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 24, 'choice' => '輸送・保管レベル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 24, 'choice' => '加工・製造レベル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 25: SDGsの目標13「気候変動に具体的な対策を」が直接的に関連している国際的な枠組みは何ですか？
            ['quiz_id' => 25, 'choice' => 'パリ協定', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 25, 'choice' => '京都議定書', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 25, 'choice' => 'ワシントン条約', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 25, 'choice' => 'ラムサール条約', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 26: SDGsの目標14「海の豊かさを守ろう」で問題となっている「海洋酸性化」の主な原因は何ですか？
            ['quiz_id' => 26, 'choice' => '大気中の二酸化炭素の増加', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 26, 'choice' => '生活排水の流入', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 26, 'choice' => 'プラスチックごみの増加', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 26, 'choice' => '海底火山の活動', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 27: SDGsの目標15「陸の豊かさも守ろう」で、2020年までの目標とされていたものの、達成が困難視されているものは何ですか？
            ['quiz_id' => 27, 'choice' => '森林減少の阻止', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 27, 'choice' => '砂漠化への対処', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 27, 'choice' => '絶滅危惧種の保護', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 27, 'choice' => '外来種の侵入防止', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 28: SDGsの目標16「平和と公正をすべての人に」で、撲滅を目指す「あらゆる形態の暴力」に含まれないものはどれですか？
            ['quiz_id' => 28, 'choice' => '国家間の経済制裁', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 28, 'choice' => '子どもへの虐待', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 28, 'choice' => '人身売買', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 28, 'choice' => '武力紛争', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 29: SDGsの目標16で、すべての人々に出生登録を含む法的な身分証明を提供することを目指すターゲットが設定されている理由は何ですか？
            ['quiz_id' => 29, 'choice' => '人権の保護と行政サービスへのアクセスのため', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 29, 'choice' => '納税を確実にするため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 29, 'choice' => '人口を正確に把握するため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 29, 'choice' => '選挙の投票率を上げるため', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 30: SDGsの目標8における、2025年までの撲滅が目標とされているものは何ですか？
            ['quiz_id' => 30, 'choice' => 'あらゆる形態の児童労働', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 30, 'choice' => '強制労働', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 30, 'choice' => '若者の失業', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 30, 'choice' => '男女間の賃金格差', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // --- 上級レベル (Quiz 31-45) ---
            // Quiz 31: SDGsの前身である「ミレニアム開発目標（MDGs）」が主に焦点を当てていたのはどのような国々でしたか？
            ['quiz_id' => 31, 'choice' => '開発途上国', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 31, 'choice' => '先進国', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 31, 'choice' => 'すべての国', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 31, 'choice' => '紛争当事国', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 32: SDGsには17の目標の下に、より具体的な「ターゲット」が設定されています。その数はいくつですか？
            ['quiz_id' => 32, 'choice' => '169', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 32, 'choice' => '17', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 32, 'choice' => '193', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 32, 'choice' => '232', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 33: SDGsの達成状況を測るための「グローバル指標（インディケーター）」は、およそいくつありますか？
            ['quiz_id' => 33, 'choice' => '約230', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 33, 'choice' => '約170', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 33, 'choice' => '約100', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 33, 'choice' => '約50', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 34: SDGsを採択した国連文書の正式名称は何ですか？
            ['quiz_id' => 34, 'choice' => '我々の世界を変革する：持続可能な開発のための2030アジェンダ', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 34, 'choice' => '国連持続可能開発目標', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 34, 'choice' => '未来のためのグローバルコンパクト', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 34, 'choice' => '地球サミット2015宣言', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 35: SDGsが重要視する5つの要素「5つのP」。People, Planet, Prosperity, Peaceと、あと一つは何ですか？
            ['quiz_id' => 35, 'choice' => 'Partnership (パートナーシップ)', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 35, 'choice' => 'Participation (参加)', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 35, 'choice' => 'Policy (政策)', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 35, 'choice' => 'Principle (原則)', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 36: 経済、社会、環境の3つの側面を統合的に捉え、持続可能な開発を目指すという考え方を何と呼びますか？
            ['quiz_id' => 36, 'choice' => '統合的アプローチ', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 36, 'choice' => 'マルチステークホルダー・プロセス', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 36, 'choice' => 'トリプルボトムライン', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 36, 'choice' => 'バックキャスティング', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 37: 企業の活動を評価する際に、経済的な利益だけでなく、社会や環境への貢献度も指標とする考え方を何と呼びますか？
            ['quiz_id' => 37, 'choice' => 'トリプルボトムライン', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 37, 'choice' => 'シェアード・バリュー', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 37, 'choice' => 'サステナビリティ・レポート', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 37, 'choice' => 'ESG投資', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 38: SDGsの進捗をモニタリングするため、各国が国連に自発的に報告する取り組みを何と呼びますか？
            ['quiz_id' => 38, 'choice' => 'VNR (Voluntary National Review)', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 38, 'choice' => 'ODA (Official Development Assistance)', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 38, 'choice' => 'HLPF (High-Level Political Forum)', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 38, 'choice' => 'GRI (Global Reporting Initiative)', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 39: SDGsのグローバルな目標を、各国の都市や地域（ローカル）の文脈に合わせて具体化し、主体的に取り組むことを何と呼びますか？
            ['quiz_id' => 39, 'choice' => 'ローカライゼーション', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 39, 'choice' => 'グローバリゼーション', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 39, 'choice' => 'カスタマイゼーション', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 39, 'choice' => 'セントラリゼーション', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 40: SDGsの指標は、方法論の確立度やデータの利用可能性によって3つの階層に分類されます。この分類を何と呼びますか？
            ['quiz_id' => 40, 'choice' => 'Tier分類', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 40, 'choice' => 'Level分類', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 40, 'choice' => 'Rank分類', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 40, 'choice' => 'Grade分類', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 41: 科学的知見を政策決定に活かすための、科学者コミュニティと政策決定者の間の連携・対話の仕組みを何と呼びますか？
            ['quiz_id' => 41, 'choice' => 'サイエンス・ポリシー・インターフェース', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 41, 'choice' => 'アカデミック・シンクタンク', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 41, 'choice' => 'オープン・サイエンス・プラットフォーム', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 41, 'choice' => 'エビデンス・ベースド・ネットワーク', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 42: SDGs達成に必要な年間資金について、現状で不足している金額（資金ギャップ）は、開発途上国においておよそいくらと推定されていますか？
            ['quiz_id' => 42, 'choice' => '約2.5兆～4兆ドル', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 42, 'choice' => '約5000億ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 42, 'choice' => '約10兆ドル', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 42, 'choice' => '資金は足りている', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 43: 2019年のSDGsサミットで、2020年から2030年までの10年間をSDGs達成に向けた「行動の10年」と位置づけました。これを何と呼びますか？
            ['quiz_id' => 43, 'choice' => 'Decade of Action', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 43, 'choice' => 'Final Countdown', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 43, 'choice' => 'The Great Push', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 43, 'choice' => 'Global Sprint', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 44: SDGsの目標17「パートナーシップで目標を達成しよう」で特に重視されている、資金調達以外の実施手段は何ですか？
            ['quiz_id' => 44, 'choice' => '技術移転と能力構築', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 44, 'choice' => '文化交流と相互理解', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 44, 'choice' => '軍事協力と安全保障', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 44, 'choice' => '人的資源の派遣', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],

            // Quiz 45: SDGsの採択に至るまでのプロセスで、市民社会や民間企業など、幅広い関係者の意見を取り入れた協議方式が特徴でした。この方式を何と呼びますか？
            ['quiz_id' => 45, 'choice' => 'マルチステークホルダー・アプローチ', 'is_correct' => true, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 45, 'choice' => 'トップダウン・アプローチ', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 45, 'choice' => 'クローズド・ドア交渉', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
            ['quiz_id' => 45, 'choice' => '政府間パネル方式', 'is_correct' => false, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('choices')->insert($choices);
    }
}
