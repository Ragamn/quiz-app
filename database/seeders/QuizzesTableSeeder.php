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
            // --- 初級レベル (level_id: 1) - 15問 ---
            // Quiz 1
            [
                'level_id' => 1,
                'question' => 'SDGsは何の略称ですか？',
                'explanation' => 'SDGsは「Sustainable Development Goals」の略で、日本語では「持続可能な開発目標」と訳されます。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 2
            [
                'level_id' => 1,
                'question' => 'SDGsには全部でいくつの目標がありますか？',
                'explanation' => 'SDGsは17の目標から構成されており、2030年までの達成を目指しています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 3
            [
                'level_id' => 1,
                'question' => 'SDGsが国連で採択されたのは何年ですか？',
                'explanation' => 'SDGsは2015年9月の国連サミットで採択されました。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 4
            [
                'level_id' => 1,
                'question' => 'SDGsの達成を目指す目標年（期限）は何年ですか？',
                'explanation' => 'SDGsは2016年から2030年までの15年間で達成することを目指しています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 5
            [
                'level_id' => 1,
                'question' => 'SDGsが掲げる中心的な理念「誰一人取り残さない」を英語で何と言いますか？',
                'explanation' => '「誰一人取り残さない」は英語で「Leave No One Behind」と言い、SDGsの最も重要な理念です。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 6
            [
                'level_id' => 1,
                'question' => 'SDGsの目標1「貧困をなくそう」は、どのような貧困をなくすことを目指していますか？',
                'explanation' => '目標1は、あらゆる場所で、あらゆる形態の貧困を終わらせることを目指しています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 7
            [
                'level_id' => 1,
                'question' => 'SDGsの目標2は「飢餓をゼロに」ですが、何を目指していますか？',
                'explanation' => '目標2は、飢餓を終わらせ、食料の安定確保と栄養改善を達成し、持続可能な農業を促進することを目指しています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 8
            [
                'level_id' => 1,
                'question' => 'SDGsの目標5は何ですか？',
                'explanation' => '目標5は「ジェンダー平等を実現しよう」で、男女間の格差をなくすことを目指します。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 9
            [
                'level_id' => 1,
                'question' => 'SDGsの目標6「安全な水とトイレを世界中に」が目指すことは何ですか？',
                'explanation' => '目標6は、すべての人々が安全な水とトイレを利用できる環境を整え、衛生状態を管理することを目指しています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 10
            [
                'level_id' => 1,
                'question' => 'SDGsの目標7「エネルギーをみんなに そしてクリーンに」が目指すことは何ですか？',
                'explanation' => '目標7は、誰もが安価で信頼できるクリーンなエネルギーを使い続けられるようにすることを目指しています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 11
            [
                'level_id' => 1,
                'question' => 'SDGsの目標11「住み続けられるまちづくりを」が目指すことは何ですか？',
                'explanation' => '目標11は、都市や人々が住む場所を、誰にとっても安全で、災害にも強く、持続可能なものにすることを目指しています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 12
            [
                'level_id' => 1,
                'question' => 'SDGsの目標12は何ですか？',
                'explanation' => '目標12は「つくる責任 つかう責任」で、持続可能な生産と消費のパターンを確保することを目指しています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 13
            [
                'level_id' => 1,
                'question' => 'SDGsの目標13は何ですか？',
                'explanation' => '目標13は「気候変動に具体的な対策を」で、気候変動とその影響に対応するための緊急対策を講じることを目指しています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 14
            [
                'level_id' => 1,
                'question' => 'SDGsの目標14「海の豊かさを守ろう」が問題視していることは次のうちどれですか？',
                'explanation' => '目標14は、海洋汚染や過剰な漁業などから海の豊かさを守り、持続可能な形で利用することを目指しています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 15
            [
                'level_id' => 1,
                'question' => 'SDGsの目標17は何ですか？',
                'explanation' => '目標17は「パートナーシップで目標を達成しよう」で、様々な組織や人々が協力してSDGsの達成を目指すことを呼びかけています。',
                'created_at' => now(), 'updated_at' => now()
            ],

            // --- 中級レベル (level_id: 2) - 15問 ---
            // Quiz 16
            [
                'level_id' => 2,
                'question' => 'SDGsの目標1で定義される「極度の貧困」とは、1日あたりの生活費が何ドル未満の状態を指しますか？',
                'explanation' => '世界銀行によって定められた国際的な貧困ラインで、2022年に改定された基準では1日2.15ドル未満とされていますが、1.90ドルが長らく基準でした。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 17
            [
                'level_id' => 2,
                'question' => 'SDGsの目標4「質の高い教育をみんなに」で特に重視されている教育の機会とは何ですか？',
                'explanation' => '生涯学習は、学校教育だけでなく、人々が生涯にわたって学び続ける機会を指し、目標4で重視されています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 18
            [
                'level_id' => 2,
                'question' => 'SDGsの目標5「ジェンダー平等を実現しよう」で撤廃を目指す、特に有害な慣行として挙げられているものは次のうちどれですか？',
                'explanation' => '児童婚、早期婚、強制婚、そして女性性器切除（FGM）などの有害な慣行は、目標5のターゲットで撤廃が掲げられています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 19
            [
                'level_id' => 2,
                'question' => 'SDGsの目標7で利用の拡大が目標とされている「再生可能エネルギー」に当てはまらないものはどれですか？',
                'explanation' => '原子力発電は、発電時にCO2を排出しませんが、使用済み核燃料の課題などから再生可能エネルギーには分類されません。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 20
            [
                'level_id' => 2,
                'question' => 'SDGsの目標8には「ディーセント・ワーク」という概念があります。これはどのような意味ですか？',
                'explanation' => 'ディーセント・ワーク（働きがいのある人間らしい仕事）とは、権利が保障され、安定した収入を生み、社会的に保護される生産的な仕事を指します。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 21
            [
                'level_id' => 2,
                'question' => 'SDGsの目標9「産業と技術革新の基盤をつくろう」で、特に開発が重要視されているインフラの要素は何ですか？',
                'explanation' => '目標9では、災害などに対する「強靱性（レジリエンス）」、そして持続可能性を兼ね備えた質の高いインフラ開発が重視されています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 22
            [
                'level_id' => 2,
                'question' => 'SDGsの目標10「人や国の不平等をなくそう」で、是正を目指す格差の指標として具体的なターゲットがあるのはどれですか？',
                'explanation' => 'ターゲット10.1では、各国の所得下位40%の人々の所得の伸び率を、国全体の平均を上回るペースで維持することが目標とされています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 23
            [
                'level_id' => 2,
                'question' => 'SDGsの目標11における「スラム」の改善目標の期限は何年ですか？',
                'explanation' => '2030年までに、スラムなどに住む人々の、適切、安全かつ安価な住宅及び基本的サービスへのアクセスを確保することを目指しています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 24
            [
                'level_id' => 2,
                'question' => 'SDGsの目標12「つくる責任 つかう責任」における、世界全体の食料廃棄を半減させる目標の対象レベルはどれですか？',
                'explanation' => 'ターゲット12.3では、2030年までに小売・消費レベルにおける世界全体の一人当たりの食料廃棄を半減させることを目指しています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 25
            [
                'level_id' => 2,
                'question' => 'SDGsの目標13「気候変動に具体的な対策を」が直接的に関連している国際的な枠組みは何ですか？',
                'explanation' => 'パリ協定は、気候変動抑制に関する多国間の国際的な協定であり、SDGs目標13の実施と密接に関連しています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 26
            [
                'level_id' => 2,
                'question' => 'SDGsの目標14「海の豊かさを守ろう」で問題となっている「海洋酸性化」の主な原因は何ですか？',
                'explanation' => '大気中の二酸化炭素（CO2）が海水に溶け込むことで、海のpHが低下し酸性化が進行します。これはサンゴや貝類に深刻な影響を与えます。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 27
            [
                'level_id' => 2,
                'question' => 'SDGsの目標15「陸の豊かさも守ろう」で、2020年までの目標とされていたものの、達成が困難視されているものは何ですか？',
                'explanation' => 'ターゲット15.2では、2020年までに森林減少を阻止することが目標でしたが達成は難しく、継続的な取り組みが求められています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 28
            [
                'level_id' => 2,
                'question' => 'SDGsの目標16「平和と公正をすべての人に」で、撲滅を目指す「あらゆる形態の暴力」に含まれないものはどれですか？',
                'explanation' => '経済制裁は国家間の政治的手段であり、目標16が直接の対象とする個人の安全を脅かす暴力とは性質が異なります。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 29
            [
                'level_id' => 2,
                'question' => 'SDGsの目標16で、すべての人々に出生登録を含む法的な身分証明を提供することを目指すターゲットが設定されている理由は何ですか？',
                'explanation' => '出生登録などの法的な身分証明は、教育や保健医療などの基本的なサービスへのアクセスや人権の保護に不可欠だからです。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 30
            [
                'level_id' => 2,
                'question' => 'SDGsの目標8における、2025年までの撲滅が目標とされているものは何ですか？',
                'explanation' => 'ターゲット8.7では、2025年までにあらゆる形態の児童労働をなくすことが目標とされています。',
                'created_at' => now(), 'updated_at' => now()
            ],

            // --- 上級レベル (level_id: 3) - 15問 ---
            // Quiz 31
            [
                'level_id' => 3,
                'question' => 'SDGsの前身である「ミレニアム開発目標（MDGs）」が主に焦点を当てていたのはどのような国々でしたか？',
                'explanation' => 'MDGsは主に開発途上国の課題解決を目標としていましたが、SDGsは先進国を含むすべての国が取り組む普遍的な目標です。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 32
            [
                'level_id' => 3,
                'question' => 'SDGsには17の目標の下に、より具体的な「ターゲット」が設定されています。その数はいくつですか？',
                'explanation' => 'SDGsには17の目標をブレークダウンした、169の具体的なターゲットが設定されています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 33
            [
                'level_id' => 3,
                'question' => 'SDGsの達成状況を測るための「グローバル指標（インディケーター）」は、およそいくつありますか？',
                'explanation' => '169のターゲットの進捗を測定するために、約230のグローバル指標が定められています（数は改訂により変動します）。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 34
            [
                'level_id' => 3,
                'question' => 'SDGsを採択した国連文書の正式名称は何ですか？',
                'explanation' => 'SDGsは「我々の世界を変革する：持続可能な開発のための2030アジェンダ」という文書の中で採択されました。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 35
            [
                'level_id' => 3,
                'question' => 'SDGsが重要視する5つの要素「5つのP」。People(人間)、Planet(地球)、Prosperity(豊かさ)、Peace(平和)と、あと一つは何ですか？',
                'explanation' => 'SDGsは、人間、地球、豊かさ、平和、そしてパートナーシップ（Partnership）の5つのPを重要な要素として掲げています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 36
            [
                'level_id' => 3,
                'question' => '経済、社会、環境の3つの側面を統合的に捉え、持続可能な開発を目指すという考え方を何と呼びますか？',
                'explanation' => '「統合的アプローチ」は、経済・社会・環境の3つの側面が相互に関連していると捉え、バランスの取れた発展を目指すSDGsの基本理念です。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 37
            [
                'level_id' => 3,
                'question' => '企業の活動を評価する際に、経済的な利益だけでなく、社会や環境への貢献度も指標とする考え方を何と呼びますか？',
                'explanation' => 'トリプルボトムラインは、企業評価の基準を経済（Profit）、社会（People）、環境（Planet）の3つの側面で捉える考え方です。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 38
            [
                'level_id' => 3,
                'question' => 'SDGsの進捗をモニタリングするため、各国が国連に自発的に報告する取り組みを何と呼びますか？',
                'explanation' => 'VNR（Voluntary National Review）は、各国がSDGs達成に向けた進捗や課題を自主的にレビューし、国連の場で共有する仕組みです。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 39
            [
                'level_id' => 3,
                'question' => 'SDGsのグローバルな目標を、各国の都市や地域（ローカル）の文脈に合わせて具体化し、主体的に取り組むことを何と呼びますか？',
                'explanation' => '「ローカライゼーション」は、グローバルな目標であるSDGsを、それぞれの地域の実情に合わせて翻訳・実行していくプロセスを指します。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 40
            [
                'level_id' => 3,
                'question' => 'SDGsの指標は、方法論の確立度やデータの利用可能性によって3つの階層に分類されます。この分類を何と呼びますか？',
                'explanation' => 'Tier分類は、指標をTier I（方法論が確立しデータも十分）、Tier II（方法論は確立しているがデータが不十分）、Tier III（方法論が未確立）に分類します。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 41
            [
                'level_id' => 3,
                'question' => '科学的知見を政策決定に活かすための、科学者コミュニティと政策決定者の間の連携・対話の仕組みを何と呼びますか？',
                'explanation' => 'サイエンス・ポリシー・インターフェースは、科学的根拠に基づいた政策決定（EBPM）を促進するために不可欠な仕組みです。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 42
            [
                'level_id' => 3,
                'question' => 'SDGs達成に必要な年間資金について、現状で不足している金額（資金ギャップ）は、開発途上国においておよそいくらと推定されていますか？',
                'explanation' => '国連貿易開発会議（UNCTAD）によると、開発途上国におけるSDGs達成のための資金ギャップは、年間約2.5兆ドルから4兆ドル以上と推定されています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 43
            [
                'level_id' => 3,
                'question' => '2019年のSDGsサミットで、2020年から2030年までの10年間をSDGs達成に向けた「行動の10年」と位置づけました。これを何と呼びますか？',
                'explanation' => '「Decade of Action」は、SDGs達成のペースを加速させるため、世界中のすべてのステークホルダーに行動を促すためのグローバルな呼びかけです。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 44
            [
                'level_id' => 3,
                'question' => 'SDGsの目標17「パートナーシップで目標を達成しよう」で特に重視されている、資金調達以外の実施手段は何ですか？',
                'explanation' => '技術移転やキャパシティ・ビルディング（能力構築）は、途上国がSDGsを達成するために、資金と同様に重要な非資金的手段とされています。',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Quiz 45
            [
                'level_id' => 3,
                'question' => 'SDGsの採択に至るまでのプロセスで、市民社会や民間企業など、幅広い関係者の意見を取り入れた協議方式が特徴でした。この方式を何と呼びますか？',
                'explanation' => 'マルチステークホルダー・アプローチは、政府だけでなく、市民社会、民間セクター、研究機関など多様な関係者が対等な立場で意思決定プロセスに参加する方式です。',
                'created_at' => now(), 'updated_at' => now()
            ],
        ];

        DB::table('quizzes')->insert($quizzes);
    }
}
