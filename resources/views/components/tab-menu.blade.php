<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('./css/background.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/tab-menu.css') }}">
</head>
<body id="tab-menu">
    <div class="tab">
        <div class="menu">
            <input type="radio" name="level" checked class="level-radio" id="level1">
            <label for="level1" class="level-label">初級</label>
        </div>
        <div class="menu">
            <input type="radio" name="level" class="level-radio" id="level2">
            <label for="level2" class="level-label">中級</label>
        </div>
        <div class="menu">
            <input type="radio" name="level" class="level-radio" id="level3">
            <label for="level3" class="level-label">上級</label>
        </div>
    </div>
</body>
</html>