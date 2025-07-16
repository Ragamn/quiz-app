<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('./css/background.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/u_q_answer.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <a href="#" class="back-link">←さいしょにもどる</a>

    <h1 class="quiz-title">クイズ</h1>

    <div class="question-box">
        <p class="question">SDGsは何個の目標がありますか？SDGsは何個の目標がありますか？</p>
    </div>

    <div class="answers">
        <button onclick="checkAnswer(1)" class="answer red">①</button>
        <button onclick="checkAnswer(2)" class="answer green">②</button>
        <button onclick="checkAnswer(3)" class="answer blue">③</button>
        <button onclick="checkAnswer(4)" class="answer yellow">④</button>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <p id="resultText">正解</p>
            <button onclick="goToNext()">次の問題へ</button>
        </div>
    </div>

    <script>
        const correctAnswer = 1; //正解の番号を設定

        function checkAnswer(answerNum){
            const resultText = document.querySelector('#resultText');
            if(answerNum == correctAnswer){
                resultText.textContent = '正解！';
            } else {
                resultText.textContent = '不正解！';
            }
            document.querySelector('#modal').style.display = 'block';
        }

        function goToNext(){
            // 次の問題へ移動する処理をここに追加
            alert('次の問題へ移動します');
        }
    </script>
</body>
</html>