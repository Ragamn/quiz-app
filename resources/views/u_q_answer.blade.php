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
        <p class="question"></p>
    </div>

    <div class="answers">
        <button onclick="checkAnswer(1)" class="answer red"></button>
        <button onclick="checkAnswer(2)" class="answer green"></button>
        <button onclick="checkAnswer(3)" class="answer blue"></button>
        <button onclick="checkAnswer(4)" class="answer yellow"></button>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <p id="resultText">〇あたり</p>
            <p class="answer-text">せいかいは <span id="correctAnswer"></span></p>
            <hr class="line">
            <div class="detail">
                <details>
                    <summary>かいせつを見る</summary>
                    <p class="explanation">
                    </p>
                </details>
            </div>
            <button onclick="nextQuiz()" class="next-button">つぎのクイズへ</button>
        </div>
    </div>

    <script>
        let correctAnswer = 1; //正解を比較するための番号
        const modal = document.querySelector("#modal");
        const resultText = document.querySelector('#resultText');
        const nextBtn = document.querySelector(".next-button");
        let currentQuestion = 1; //現在のクイズ
        const totalQuestions = 10; // 10問に戻す

        let answers = []; // ユーザーの回答を保存する配列
        let results = []; //最終スコア保存用
        let currentShuffledChoices = []; // 現在の問題のシャッフルされた選択肢を保存

        //jsonで渡された問題を取ってくる
        const quizzes = @json($quizzes);
        const levelId = @json($levelId);

        displayQuestion(); // 初期表示のために問題を表示

        //問題の内容を表示
        function displayQuestion() {
            const currentQuiz = quizzes[currentQuestion - 1];

            // 質問を表示
            const questionBox = document.querySelector('.question');
            questionBox.textContent = currentQuiz.question;

            // 選択肢をシャッフル
            const shuffledChoices = [...currentQuiz.choices];
            for (let i = shuffledChoices.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [shuffledChoices[i], shuffledChoices[j]] = [shuffledChoices[j], shuffledChoices[i]];
            }

            // シャッフルされた選択肢を保存
            currentShuffledChoices = shuffledChoices;

            // 選択肢ボタンにテキストを設定し、正解の選択肢を特定
            const answerButtons = document.querySelectorAll('.answer');
            shuffledChoices.forEach((choice, index) => {
                const button = answerButtons[index];
                button.textContent = `${getChoicePrefix(index + 1)}${choice.choice}`;
                // 現在の表示順で正解のインデックスを保存
                if (choice.is_correct) {
                    correctAnswer = index + 1;
                }
            });

            // 解説文と正解表示を更新
            const explanation = document.querySelector('.explanation');
            explanation.textContent = currentQuiz.explanation;

            const correctAnswerText = document.querySelector('#correctAnswer');
            const correctChoice = shuffledChoices.find(choice => choice.is_correct);
            correctAnswerText.textContent = correctChoice.choice;
        }
      


        //選択に応じた番号(①など)を返す関数
        function getChoicePrefix(choiceNum) {
            const prefixes = ['①', '②', '③', '④'];
            return prefixes[choiceNum - 1] || '';
        }

        //アンサーチェックする
        function checkAnswer(answerNum){
            
            modal.classList.add("show");

            let currentQuiz = quizzes[currentQuestion - 1];
            
            // シャッフルされた選択肢から選択されたものを取得
            let selectedChoice = currentShuffledChoices[answerNum - 1];
            let isCorrect = answerNum === correctAnswer;

            // 回答を保存（quiz_id, choice_id, 正解フラグ）
            answers.push([
                currentQuiz.quiz_id,  // quiz_idを正しく取得
                selectedChoice.choice_id,  // choice_idを正しく取得
                isCorrect
            ]);

            //正解か不正解かを判定
            if(isCorrect){
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
            //モーダルを非表示
            modal.classList.remove("show");

            //問題カウントを+1
            currentQuestion++;
            
           if(currentQuestion > totalQuestions){
                showScore();
            } else {
                // 次の問題へ移動する処理をここに追加
                displayQuestion();
           }
        }

        //クイズを終了し、結果画面に行く
        function showScore(){
            modal.classList.remove("show")
            // スコアを表示する処理をここに追加

            //スコア計算
            let correctCount = answers.filter(answer => answer[2]).length;

            // levelIdをBladeから取得
            results.push([levelId, correctCount]);

            fetch('/quiz/result', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                  answers: answers,
                  results: results[0]
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // スコア表示ページにリダイレクト
                    window.location.href = data.redirect_url;
                } else {
                    console.error('Error saving results:', data.error);
                    alert('結果の保存に失敗しました。');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('エラーが発生しました。');
            });

        }
    </script>
</body>
</html>
