<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/background.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@900&display=swap" rel="stylesheet">
    <title>ログイン</title>
</head>
<body>
    <h1 id="title">サスモン</h1>
    <h2 id="display_title">ログイン</h2>
    
    <!-- Session Status -->
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="login_form">
        @csrf

        <!-- Email Address -->
        <div>
            <!-- <label for="email">メールアドレス</label><br> -->
            <input id="email" class="input" type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス" required autofocus autocomplete="username" />
            @if ($errors->get('email'))
                <div style="color: red;">
                    @foreach ($errors->get('email') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Password -->
        <div>
            <!-- <label for="password">パスワード</label><br> -->
            <input id="password" class="input" type="password" name="password" placeholder="ログイン" required autocomplete="current-password" />
            @if ($errors->get('password'))
                <div style="color: red;">
                    @foreach ($errors->get('password') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>


        <div>
            <button type="submit" id="login_btn">
                <span>ログイン</span>
            </button>
        </div>
    </form>
</body>
</html>
