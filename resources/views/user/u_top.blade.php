<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザートップ画面</title>
    <link rel="stylesheet" href="{{ asset('css/u_top.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('./css/background.css') }}">
</head>
<body id="u_top">
    <div class="header">
        <h1 class="title">サスモン</h1>
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit" class="logout" style="background: none; border: none; cursor: pointer; text-decoration: underline; color: inherit; font: inherit;">
                ログアウト
            </button>
        </form>
    </div>
    <div class="content">
        <p class="text-content">むずかしさをえらんでね</p>
        <form action="#" method="get">
            <select name="level_id" class="level-select">
                <option value="" hidden>えらんでね</option>
                @foreach($levels as $level)
                    <option value="{{ $level['level_id'] }}">{{ $level['level'] }}</option>
                @endforeach
            </select>
        </form>
        <p class="text-content">だれがいちばんうまくできたかみれるよ</p>
        <a href="#" class="ranking">ランキングをみる</a>
        <p class="text-content">いままでにやったこたえのきろくだよ</p>
        <a href="#" class="history">りれきをみる</a>
    </div>
</body>
</html>
