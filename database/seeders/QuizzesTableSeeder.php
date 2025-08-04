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
                'question' => 'SDGsが採択されたのは何年ですか？',
                'explanation' => 'SDGsは2015年9月の国連総会で採択されました。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの達成目標年は何年ですか？',
                'explanation' => 'SDGsは2030年までの達成を目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標1は何ですか？',
                'explanation' => '目標1は「貧困をなくそう」で、あらゆる場所で、あらゆる形態の貧困を終わらせることを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標2は何ですか？',
                'explanation' => '目標2は「飢餓をゼロに」で、飢餓を終わらせ、食料安全保障を達成することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標3は何ですか？',
                'explanation' => '目標3は「すべての人に健康と福祉を」で、あらゆる年齢のすべての人々の健康的な生活を確保することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標4は何ですか？',
                'explanation' => '目標4は「質の高い教育をみんなに」で、すべての人に包摂的かつ公正な質の高い教育を確保することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標5は何ですか？',
                'explanation' => '目標5は「ジェンダー平等を実現しよう」で、ジェンダー平等を達成し、すべての女性及び女児の能力強化を図ることを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標6は何ですか？',
                'explanation' => '目標6は「安全な水とトイレを世界中に」で、すべての人々の水と衛生の利用可能性と持続可能な管理を確保することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標7は何ですか？',
                'explanation' => '目標7は「エネルギーをみんなに そしてクリーンに」で、すべての人々の安価かつ信頼できる持続可能な近代的エネルギーへのアクセスを確保することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標8は何ですか？',
                'explanation' => '目標8は「働きがいも経済成長も」で、包摂的かつ持続可能な経済成長及びすべての人々の完全かつ生産的な雇用を促進することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標9は何ですか？',
                'explanation' => '目標9は「産業と技術革新の基盤をつくろう」で、強靱なインフラ構築、包摂的かつ持続可能な産業化の促進を図ることを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標10は何ですか？',
                'explanation' => '目標10は「人や国の不平等をなくそう」で、各国内及び各国間の不平等を是正することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標11は何ですか？',
                'explanation' => '目標11は「住み続けられるまちづくりを」で、包摂的で安全かつ強靱で持続可能な都市及び人間居住を実現することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標12は何ですか？',
                'explanation' => '目標12は「つくる責任 つかう責任」で、持続可能な生産消費形態を確保することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標13は何ですか？',
                'explanation' => '目標13は「気候変動に具体的な対策を」で、気候変動及びその影響を軽減するための緊急対策を講じることを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標14は何ですか？',
                'explanation' => '目標14は「海の豊かさを守ろう」で、持続可能な開発のために海洋・海洋資源を保全し、持続可能な形で利用することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標15は何ですか？',
                'explanation' => '目標15は「陸の豊かさも守ろう」で、陸域生態系の保護、回復、持続可能な利用の推進を図ることを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標16は何ですか？',
                'explanation' => '目標16は「平和と公正をすべての人に」で、持続可能な開発のための平和で包摂的な社会を促進することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsの目標17は何ですか？',
                'explanation' => '目標17は「パートナーシップで目標を達成しよう」で、持続可能な開発のための実施手段を強化し、グローバル・パートナーシップを活性化することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsはどの国際機関で採択されましたか？',
                'explanation' => '国連（国際連合）で採択されました。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsは何カ国で採択されましたか？',
                'explanation' => '193の国連加盟国すべてで採択されました。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsのスローガン「誰一人取り残さない」を英語で何といいますか？',
                'explanation' => '「誰一人取り残さない」は英語で「Leave No One Behind」といいます。',
                'created_at' => now(),
            ],
            [
                'level_id' => 1,
                'question' => 'SDGsで「持続可能」を英語で何といいますか？',
                'explanation' => '「持続可能」は英語で「Sustainable」といいます。',
                'created_at' => now(),
            ],
            
            // 中級レベル (level_id: 2) - 15問
            [
                'level_id' => 2,
                'question' => 'SDGsの目標1で対象となる貧困の基準は1日何ドル未満ですか？',
                'explanation' => '極度の貧困は1日1.90ドル未満の収入で生活している状態を指します。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標2「飢餓をゼロに」で重要な概念は何ですか？',
                'explanation' => '食料安全保障の確保と栄養改善、持続可能な農業の促進が重要な概念です。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標3で対象となる年齢層は？',
                'explanation' => '「あらゆる年齢のすべての人々」が対象となっており、年齢制限はありません。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標4で重視される教育の質とは？',
                'explanation' => '包摂的かつ公正な質の高い教育で、すべての人に学習機会を提供することを重視しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標5で対象となる性別は？',
                'explanation' => 'すべての女性及び女児が対象となっており、ジェンダー平等の実現を目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標7で重要視されているエネルギー源は何ですか？',
                'explanation' => '再生可能エネルギーの利用拡大と、エネルギー効率の改善が重要視されています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標8における強制労働の撲滅期限は？',
                'explanation' => '2025年までに児童労働を撲滅し、2030年までに強制労働を根絶することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標9におけるインフラ開発で重視される要素は？',
                'explanation' => '信頼でき、持続可能かつ強靱で質の高いインフラの開発が重視されています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標10で対象となる所得格差の指標は？',
                'explanation' => '所得下位40%の所得成長率について、国内平均を上回る数値を達成することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標11における都市人口の安全な住宅確保の期限は？',
                'explanation' => '2030年までに、すべての人々の、適切、安全かつ安価な住宅及び基本的サービスへのアクセスを確保することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標12における食料廃棄の削減目標は？',
                'explanation' => '2030年までに小売・消費レベルにおける世界全体の一人当たりの食料の廃棄を半減させることを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標13における気候変動対策で重要な要素は？',
                'explanation' => '気候変動の緩和と適応の両方が重要で、温室効果ガスの削減と気候変動への対応力強化が必要です。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標14「海の豊かさを守ろう」において、特に問題となっているのは何ですか？',
                'explanation' => '海洋プラスチック汚染、過剰漁業、海洋酸性化などが深刻な問題となっています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標15における森林減少の阻止期限は？',
                'explanation' => '2020年までに森林減少を阻止することが目標でしたが、継続的な取り組みが必要です。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標16における汚職の撲滅手段は？',
                'explanation' => 'あらゆるレベルでの公共機関における効果的で説明責任のある透明な制度を構築することが重要な手段とされています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの実施において「相互連関性」が重要な理由は？',
                'explanation' => '17の目標は相互に関連しており、一つの目標の達成が他の目標の達成にも影響を与えるためです。',
                'created_at' => now(),
            ],

            // 上級レベル (level_id: 3) - 15問
            [
                'level_id' => 3,
                'question' => 'SDGsの前身となったMDGs（ミレニアム開発目標）は何年から何年まで実施されましたか？',
                'explanation' => 'MDGsは2000年から2015年まで実施され、その成果と課題を踏まえてSDGsが策定されました。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsのターゲット（具体的目標）は全部でいくつありますか？',
                'explanation' => 'SDGsには17の目標の下に169のターゲット（具体的目標）が設定されています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsの理念「誰一人取り残さない」を英語で何といいますか？',
                'explanation' => '「誰一人取り残さない」は英語で「Leave No One Behind」といいます。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsを推進する国連文書の正式名称は何ですか？',
                'explanation' => '「持続可能な開発のための2030アジェンダ」という正式名称で国連で採択されました。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsの5つのP（Five Ps）とは何ですか？',
                'explanation' => 'People（人間）、Planet（地球）、Prosperity（繁栄）、Peace（平和）、Partnership（パートナーシップ）の5つのPです。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsにおける「多国間主義」が重要視される理由は何ですか？',
                'explanation' => '地球規模の課題解決には国境を越えた協力が不可欠であり、国際機関や多国間協定を通じた連携が必要だからです。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsの実施において「統合的アプローチ」が重要な理由は何ですか？',
                'explanation' => '17の目標は相互に関連しており、一つの目標の達成が他の目標の達成にも影響を与えるためです。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsにおける「トリプルボトムライン」とは何ですか？',
                'explanation' => '経済（Profit）、社会（People）、環境（Planet）の3つの側面を同時に考慮するアプローチのことです。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsにおける「Data Revolution」とは何ですか？',
                'explanation' => 'データの収集、分析、活用を革新的に改善し、SDGsの進捗を正確に測定・監視するためのデータ駆動型アプローチのことです。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsの実施における「VNR」とは何の略ですか？',
                'explanation' => 'Voluntary National Review（自発的国家レビュー）の略で、各国がSDGsの進捗状況を自主的に報告する仕組みです。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsにおける「ローカライゼーション」とは何ですか？',
                'explanation' => 'グローバルな目標を地域や自治体レベルに適応させ、地域の実情に合わせて実施することを意味します。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsの進捗測定における「Tier分類」とは何ですか？',
                'explanation' => 'インディケーターを方法論の確立度とデータ利用可能性に基づいてTier I、II、IIIに分類する仕組みです。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsにおける「サイエンス・ポリシー・インターフェース」とは？',
                'explanation' => '科学的知見と政策決定を橋渡しする仕組みで、エビデンスに基づく政策形成を促進します。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsの財政ギャップは年間推定何兆ドルと言われていますか？',
                'explanation' => '年間約2.5兆ドルの財政ギャップがあると推定されており、官民連携による資金調達が重要とされています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsの実施期間15年間において、中間評価が行われるのは何年ですか？',
                'explanation' => 'SDGsサミットが2023年に開催され、実施から8年目の中間評価が行われました。',
                'created_at' => now(),
            ],
        ];

        DB::table('quizzes')->insert($quizzes);
    }
}
