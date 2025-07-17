<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/background.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@900&display=swap" rel="stylesheet">
    <title>ユーザー登録</title>
</head>
<body>
    <h1 id="title">サスモン</h1>
    <h2 id="display_title">しんきとうろく</h2>
    
    <form method="POST" action="{{ route('register') }}" class="reg_form">
        @csrf

        <!-- Name -->
        <div>
            <!-- <label for="name">名前</label><br> -->
            <input id="name" type="text" name="name" class="input" placeholder="なまえ" value="{{ old('name') }}" required autofocus autocomplete="name" />
            @if ($errors->get('name'))
                <div style="color: red;">
                    @foreach ($errors->get('name') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Email Address -->
        <div>
            <!-- <label for="email">メールアドレス</label><br> -->
            <input id="email" type="email" name="email" class="input" placeholder="メールアドレス" value="{{ old('email') }}" required autocomplete="username" />
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
            <input id="password" type="password" name="password" class="input" placeholder="パスワード" required autocomplete="new-password" />
            @if ($errors->get('password'))
                <div style="color: red;">
                    @foreach ($errors->get('password') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Confirm Password -->
        <div>
            <!-- <label for="password_confirmation">パスワード確認</label><br> -->
            <input id="password_confirmation" type="password" name="password_confirmation" class="input" placeholder="パスワードかくにん" required autocomplete="new-password" />
            @if ($errors->get('password_confirmation'))
                <div style="color: red;">
                    @foreach ($errors->get('password_confirmation') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>

        <div>
            <button type="submit" id="login_btn">
               <span>新規登録</span>
            </button>
        </div>
    </form>
</body>
</html>
