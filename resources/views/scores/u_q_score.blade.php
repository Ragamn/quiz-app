<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/u_q_score.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/background.css') }}">
    <title>スコア表示画面</title>
</head>
<body id="u_q_score">
    <a href="/top">さいしょにもどる</a>
    <h1 class="score">てんすう：{{ $latestScore ? $latestScore->score : 0 }}てん</h1>

    @if($recentAnswers && $recentAnswers->count() > 0)
        @foreach($recentAnswers as $index => $answer)
        <details>
            <summary>
                <p class="summary-date">{{ $answer->created_at->format('Y/m/d') }}</p>
                <div class="summary-header">
                    <h1 class="summary-title">クイズ{{ $index + 1 }}</h1>
                    @if($answer->is_correct)
                        <h1 class="summary-corect">〇あたり！</h1>
                    @else
                        <h1 class="summary-incorect">×はずれ...</h1>
                    @endif
                </div>
            </summary>
            <div class="summary-core">
                <p class="question-title">{{ $answer->question }}</p>
                <div class="question-sub">
                    <p class="correct-choice-title">こたえ</p>
                    <p class="correct-choice">{{ $answer->correct_choice }}</p>
                    <p class="user-choice-subtitle">えらんだこたえ</p>
                    <p class="user-choice">{{ $answer->user_choice }}</p>
                    <p class="subtitle">かいせつ</p>
                    <p class="explanation">{{ $answer->explanation }}</p>
                </div>
            </div>
        </details>
        @endforeach
    @else
        <p>まだクイズの回答がありません。</p>
    @endif
</body>
</html>