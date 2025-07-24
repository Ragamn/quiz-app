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
        <p class="question">SDGsは何個の目標がありますか？SDGsは何個の目標がありますか？SDGsは何個の目標がありますか？</p>
    </div>

    <div class="answers">
        <button onclick="checkAnswer(1)" class="answer red">①17</button>
        <button onclick="checkAnswer(2)" class="answer green">②こんにちはこんにちはこんにちはこんにちはこんにちは</button>
        <button onclick="checkAnswer(3)" class="answer blue">③こんにちはこんにちはこんにちはこんにちはこんにちはこんにちは</button>
        <button onclick="checkAnswer(4)" class="answer yellow">④こんにちはこんにちはこんにちはこんにちはこんにちはこんにちは</button>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <p id="resultText">〇あたり</p>
            <p class="answer-text">せいかいは <span id="correctAnswer">17個</span></p>
            <hr class="line">
            <div class="detail">
                <details>
                    <summary>かいせつを見る</summary>
                    <p class="explanation">
                        SDGsは17個の目標があります。SDGsは17個の目標があります。
                        SDGsは17個の目標があります。SDGsは17個の目標があります。
                        SDGsは17個の目標があります。SDGsは17個の目標があります。
                        SDGsは17個の目標があります。SDGsは17個の目標があります。
                        SDGsは17個の目標があります。SDGsは17個の目標があります。
                    </p>
                </details>
            </div>
            <button onclick="nextQuiz()" class="next-button">つぎのクイズへ</button>
        </div>
    </div>

    <script>
        const correctAnswer = 1; //正解を比較するための番号
        const modal = document.querySelector("#modal");
        const resultText = document.querySelector('#resultText');
        const nextBtn = document.querySelector(".next-button");
        let currentQuestion = 1; //現在のクイズ
        const totalQuestions = 10;

        //アンサーチェックする
        function checkAnswer(answerNum){
            
            modal.classList.add("show");

            //正解か不正解かを判定
            if(answerNum == correctAnswer){
                resultText.textContent = '〇あたり';
                resultText.style.color = '#FF0000';
            } else {
                resultText.textContent = '✕はずれ';
                resultText.style.color = '#0062FF';
            }

            if(currentQuestion == totalQuestions){
                nextBtn.innerText = 'スコアを見る'
                nextBtn.onclick = showScore;
            }else {
                nextBtn.innerText = 'つぎのクイズへ'
                nextBtn.onclick = nextQuiz
            }
        }

        //次の問題へ移動する
        function nextQuiz(){
            //問題カウントを+1
            currentQuestion++;
            // 次の問題へ移動する処理をここに追加
        }

        //クイズを終了し、結果画面に行く
        function showScore(){
            modal.classList.remove("show")
            // スコアを表示する処理をここに追加
        }
    </script>
</body>
</html>
