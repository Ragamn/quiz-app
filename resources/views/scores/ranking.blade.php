
<head>
    <title>スコアランキング</title>
</head>
<body>
    <h1>スコアランキング</h1>
    <table>
        <thead>
            <tr>
                <th>順位</th>
                <th>ユーザー名</th>
                <th>スコア</th>
            </tr>
        </thead>
        <tbody>
        @foreach($scores as $index => $score)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $score->user->name }}</td>
                <td>{{ number_format($score->score) }}点</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
