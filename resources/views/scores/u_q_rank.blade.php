<html>
<head>
    <title>スコアランキング</title>
    <link rel="stylesheet" href="{{ asset('./css/background.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/u_q_rank.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap" rel="stylesheet">
</head>
<body id="u_q_rank"> 
    <a href="top" class="back-link">←さいしょにもどる</a>
    <div id="user-rank-display">
        @if($userRank)
            <p class="user_rank">{{ auth()->user()->name }}さんは</p><p class="user_rank">{{ $userRank }}ばんめ</p>
        @else
            <p class="user_rank">あなたのスコアはまだ記録されていません。</p>
        @endif
    </div>
    <div class="tab">
        <div class="menu">
            <input type="radio" name="level" checked class="level-radio" id="level1" value="1">
            <label for="level1" class="level-label">初級</label>
        </div>
        <div class="menu">
            <input type="radio" name="level" class="level-radio" id="level2"  value="2">
            <label for="level2" class="level-label">中級</label>
        </div>
        <div class="menu">
            <input type="radio" name="level" class="level-radio" id="level3"  value="3">
            <label for="level3" class="level-label">上級</label>
        </div>
    </div>
    <table>
        <tbody id="ranking-body">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.level-radio').change(function() {
                var levelId = $(this).val();
                $.ajax({
                    url: '/u_q_rank',
                    type: 'GET',
                    data: { level: levelId },
                    success: function(data) {
                        $('#ranking-body').empty();
                        $.each(data.scores, function(index, score) {
                            var rank = index + 1;
                            var rankText = rank >= 4 ? rank : '<img src="{{ asset('img/kkrn_icon_ranking_') }}' + rank + '.png" alt="' + rank + '位" class="medal">';
                            var row = '<tr class="rank_body">' +
                                        '<td class="rank_text">' + rankText + '</td>' +
                                        '<td class="rank_text">' + score.user.name + '</td>' +
                                        '<td class="rank_text">' + score.score + 'てん</td>' +
                                      '</tr>';
                            $('#ranking-body').append(row);
                        });
                        var userRankHtml = '';
                        if (data.userRank) {
                            userRankHtml = '<p class="user_rank">{{ auth()->user()->name }}さんは</p><p class="user_rank">' + data.userRank + 'ばんめ</p>';
                        } else {
                            userRankHtml = '<p class="user_rank">あなたのスコアはまだ記録されていません。</p>';
                        }
                        $('#user-rank-display').html(userRankHtml);
                    }
                });
            });
        });
    </script>
</body>
</html>
