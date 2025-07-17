<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/u_q_score.css') }}">
    <title>スコア表示画面</title>
</head>
<body id="u_q_score">
    <a href="">さいしょにもどる</a>
    <h1>てんすう：{{ $latestScore ? $latestScore->score : 0 }}てん</h1>

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
                <h3>{{ $answer->question }}</h3>
                <p>選んだ答え {{ $answer->choice_id }}</p>
                <p>正解 {{ $answer->correct_choice }}</p>
                <p>かいせつ</p>
                <p>{{ $answer->explanation }}</p>
            </div>
        </details>
        @endforeach
    @else
        <p>まだクイズの回答がありません。</p>
    @endif
</body>
</html>