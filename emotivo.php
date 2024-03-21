<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #6bdde0;
        }

        h3 {
            text-align: center;
        }

        input[type="radio"] {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .respostas {
            background-color: #9d74e0;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .cont {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .nextpage {
            text-align: center;

        }

        .nextpage>p>a {
            text-decoration: none;
            margin-left: 10px;
            color: black;
        }
    </style>
</head>
 <div class="cont">
     <h3>Saiba se voce é uma pessoa emotiva, responda as questos abaixo</h3>
     <div class="respostas">
         <p>Soma das respostas:
             Valor das alternativas: A= 1, B= 0 e C= 0,5. Após responder toda a sessão de 7 perguntas some o resultado. Resultados com 0,5 são arredondados para baixo.
         <p>De 1 a 3: Não Emotivo (a)</p>
         <p>De 5 a 7: Emotivo (a)</p>
         <p> Se o resultado deu 4, revise.</p>
         </p>
     </div>
     <?php if (!isset($_POST['submit'])) : ?>
         <form method="post">
             <p>1. Diante de um acontecimento com carga emocional, você tende a:</p>
             <input type="radio" name="question1" value="a"> a) Sentir mais no coração o choque<br>
             <input type="radio" name="question1" value="b"> b) Pensar mais do que sentir<br>
             <input type="radio" name="question1" value="c"> c) Indeciso<br>

             <p>2. Quando você não encontra a solução de um problema, inclina-se a:</p>
             <input type="radio" name="question2" value="a"> a) Preocupar-se e se angustiar interiormente<br>
             <input type="radio" name="question2" value="b"> b) Sabe esperar, com pensamentos mais racionais<br>
             <input type="radio" name="question2" value="c"> c) Indeciso.<br>

             <p>3. Em seus relacionamentos amorosos, você tende a:</p>
             <input type="radio" name="question3" value="b"> b) Sentir tudo de forma mais moderada, tendo uma ligação mais “mental” com a pessoa<br>
             <input type="radio" name="question3" value="a"> a) Sentir emocionalmente impactado e a ligação se dá pelo coração<br>
             <input type="radio" name="question3" value="c"> c) Indeciso.<br>

             <p>4. Quando entram em confronto com você, tem propensão a:</p>
             <input type="radio" name="question4" value="b"> b) Procura entender a situação antes de fazer algo<br>
             <input type="radio" name="question4" value="a"> a) Instintivamente se indignar interiormente, com grande comoção<br>
             <input type="radio" name="question4" value="c"> c) Indeciso.<br>

             <p>5. Quando pensa no futuro, constantemente você:</p>
             <input type="radio" name="question5" value="b"> b) Pensa em todas possibilidades sem mudar seu ânimo emocional (aqui você pode se cansar de pensar demais)<br>
             <input type="radio" name="question5" value="a"> a) Tem grandes emoções, ou muito feliz, ou muito triste etc<br>
             <input type="radio" name="question5" value="c"> c) Indeciso.<br>

             <p>6. Seu humor e estado de ânimo, tende a ser:</p>
             <input type="radio" name="question6" value="b"> b) Geralmente equilibrado, aconteça o que acontecer<br>
             <input type="radio" name="question6" value="a"> a) Inconstante, passando de alegria à tristeza, entusiasmo ao desânimo, sem muito entendimento do porquê.<br>
             <input type="radio" name="question6" value="c"> c) Indeciso.<br>

             <p>7. Em uma situação complicada e difícil, você se sente geralmente:</p>
             <input type="radio" name="question7" value="a"> a) Emocionalmente impactado<br>
             <input type="radio" name="question7" value="b"> b) De forma um pouco mais equilibrada<br>
             <input type="radio" name="question7" value="c"> c) Indeciso.<br>

             <input type="submit" name="submit" value="Enviar">
         </form>

     <?php else : ?>
         <h2>Quiz Result</h2>
         <?php
            $score = 0;
            $answers = [
                'question1' => $_POST['question1'],
                'question2' => $_POST['question2'],
                'question3' => $_POST['question3'],
                'question4' => $_POST['question4'],
                'question5' => $_POST['question5'],
                'question6' => $_POST['question6'],
                'question7' => $_POST['question7']
            ];

            foreach ($answers as $question => $answer) {
                switch ($answer) {
                    case 'a':
                        $score += 1; // Resposta A vale 1 ponto
                        break;
                    case 'b':
                        $score += 0; // Resposta B vale 0 pontos
                        break;
                    case 'c':
                        $score += 0.5; // Resposta C vale 0.5 pontos
                        break;
                    default:
                        break;
                }
            }

            if ($score >= 5 && $score <= 7) {
                echo "<p>Emotivo(a)</p>";
                echo "Seu resultado foi de $score";
            } else if ($score >= 1 && $score <= 3) {
                echo "<p>Não Emotivo(a)</p>";
                echo "Seu resultado foi de $score";
            } else {
                echo "<p>Seu o resultado deu 4, revise</p>";
            }
            ?>
         <div class="nextpage">
             <p><a href="#">Ir para o proximo</a></p>
         </div>
         <?php

            ?>

     <?php endif; ?>
 </div>
