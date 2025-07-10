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
            
            // 中級レベル (level_id: 2)
            [
                'level_id' => 2,
                'question' => 'SDGsの目標7「エネルギーをみんなに そしてクリーンに」で重要視されているエネルギー源は何ですか？',
                'explanation' => '再生可能エネルギーの利用拡大と、エネルギー効率の改善が重要視されています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標8は何ですか？',
                'explanation' => '目標8は「働きがいも経済成長も」で、包摂的かつ持続可能な経済成長及びすべての人々の完全かつ生産的な雇用と働きがいのある人間らしい雇用を促進することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標9は何ですか？',
                'explanation' => '目標9は「産業と技術革新の基盤をつくろう」で、強靱なインフラ構築、包摂的かつ持続可能な産業化の促進及びイノベーションの推進を図ることを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標10は何ですか？',
                'explanation' => '目標10は「人や国の不平等をなくそう」で、各国内及び各国間の不平等を是正することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標11は何ですか？',
                'explanation' => '目標11は「住み続けられるまちづくりを」で、包摂的で安全かつ強靱で持続可能な都市及び人間居住を実現することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標12は何ですか？',
                'explanation' => '目標12は「つくる責任 つかう責任」で、持続可能な生産消費形態を確保することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標13は何ですか？',
                'explanation' => '目標13は「気候変動に具体的な対策を」で、気候変動及びその影響を軽減するための緊急対策を講じることを目指しています。',
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
                'question' => 'SDGsの目標15は何ですか？',
                'explanation' => '目標15は「陸の豊かさも守ろう」で、陸域生態系の保護、回復、持続可能な利用の推進、持続可能な森林の経営、砂漠化への対処、並びに土地の劣化の阻止・回復及び生物多様性の損失を阻止することを目指しています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 2,
                'question' => 'SDGsの目標16は何ですか？',
                'explanation' => '目標16は「平和と公正をすべての人に」で、持続可能な開発のための平和で包摂的な社会を促進し、すべての人々に司法へのアクセスを提供し、あらゆるレベルにおいて効果的で説明責任のある包摂的な制度を構築することを目指しています。',
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
                'question' => 'SDGsのインディケーター（指標）は全部でいくつありますか？',
                'explanation' => 'SDGsの進捗を測定するために、232のインディケーター（指標）が設定されています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsにおいて「Transforming our world」という表現が使われている文書は何ですか？',
                'explanation' => '「我々の世界を変革する：持続可能な開発のための2030アジェンダ」という正式名称で、SDGsの基本文書です。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsの実施において重要な「5つのP」とは何ですか？',
                'explanation' => 'People（人間）、Planet（地球）、Prosperity（繁栄）、Peace（平和）、Partnership（パートナーシップ）の5つのPです。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsの進捗をレビューする国連の会議は何と呼ばれていますか？',
                'explanation' => 'HLPF（High-level Political Forum on Sustainable Development：持続可能な開発に関するハイレベル政治フォーラム）で毎年開催されています。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsにおいて「多国間主義」が重要視される理由は何ですか？',
                'explanation' => '地球規模の課題解決には国境を越えた協力が不可欠であり、国際機関や多国間協定を通じた連携が必要だからです。',
                'created_at' => now(),
            ],
            [
                'level_id' => 3,
                'question' => 'SDGsの実施において「統合的アプローチ」が重要な理由は何ですか？',
                'explanation' => '17の目標は相互に関連しており、一つの目標への取り組みが他の目標にも影響を与えるため、総合的な視点での実施が必要だからです。',
                'created_at' => now(),
            ],
        ];

        DB::table('quizzes')->insert($quizzes);
    }
}
