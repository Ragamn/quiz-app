<html>
<head>
    <title>スコアランキング</title>
    <link rel="stylesheet" href="{{ asset('./css/background.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/u_q_rank.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap" rel="stylesheet">
</head>
<body id="u_q_rank"> 
    <a href="top" class="back-link">←さいしょにもどる</a>
    @if($userRank)
        <p class="user_rank">{{ auth()->user()->name }}さんは</p><p class="user_rank">{{ $userRank }}ばんめ</p>
    @else
        <p class="user_rank">あなたのスコアはまだ記録されていません。</p>
    @endif
    <table>
        <tbody >
        @foreach($scores as $index => $score)
            <tr class="rank_body">
                    @if($index + 1 >= 4)
                        <td class="rank_text">{{ $index + 1 }}</td>
                    @else
                        <td>
                            <img src="{{ asset('img/kkrn_icon_ranking_' . ($index + 1) . '.png') }}" alt="{{ $index + 1 }}位" class="medal">
                        </td>
                    @endif
                <td class="rank_text">{{ $score->user->name }}</td>
                <td class="rank_text">{{ number_format($score->score) }}てん</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
