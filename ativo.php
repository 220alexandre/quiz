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
        <p>De 1 a 3: Não Ativo (a)</p>
        <p>De 5 a 7: Ativo (a) </p>
        <p>Se o resultado deu 4, revise</p>
        </p>
    </div>
    <?php if (!isset($_POST['submit'])) : ?>
        <form method="post">
            <p>1. Quando tem alguma ideia nova, você tende a:</p>
            <input type="radio" name="question1" value="b"> b) Ir pensando, reformulando, dando um tempo até ser possível colocar em prática<br>
            <input type="radio" name="question1" value="a"> a) Logo quer agir e sente grande vontade para isso<br>
            <input type="radio" name="question1" value="c"> c) Indeciso<br>

            <p>2. Diante a atividades maçantes e que exigem esforço, tem a propensão de:</p>
            <input type="radio" name="question2" value="b"> b) Ser mais lento, demorar e sentir vontade de desistir<br>
            <input type="radio" name="question2" value="a"> a) Sente-se desafiado e consegue persistir na atividade<br>
            <input type="radio" name="question2" value="c"> c) Indeciso.<br>

            <p>3. Depois de uma atividade física, você geralmente:</p>
            <input type="radio" name="question3" value="a"> a) Se sente enérgico e se recupera rápido<br>
            <input type="radio" name="question3" value="b"> b) Precisa de grande esforço e a recuperação é mais lenta<br>
            <input type="radio" name="question3" value="c"> c) Indeciso.<br>

            <p>4. Em seu tempo livre, você prefere:</p>
            <input type="radio" name="question4" value="b"> b) Descansar, não se movimentando muito<br>
            <input type="radio" name="question4" value="a"> a) Fazer alguma coisa, não conseguindo ficar muito parado(a)<br>
            <input type="radio" name="question4" value="c"> c) Indeciso.<br>

            <p>5. Sobre seus sonhos e pensamentos futuros, cogita normalmente:</p>
            <input type="radio" name="question5" value="a"> a) Estar fazendo muitas coisas de seu gosto<br>
            <input type="radio" name="question5" value="b"> b) Alcançando uma calma e descanso<br>
            <input type="radio" name="question5" value="c"> c) Indeciso.<br>

            <p>6. As pessoas ao seu lado costumam te chamar de:</p>
            <input type="radio" name="question6" value="a"> a) Mais Inquieto(a)<br>
            <input type="radio" name="question6" value="b"> b) Mais Quieto(a)<br>
            <input type="radio" name="question6" value="c"> c) Indeciso.<br>

            <p>7. Sobre se divertir, tende geralmente a:</p>
            <input type="radio" name="question7" value="b"> b) Buscar coisas mais tranquilas e sem muito alvoroço<br>
            <input type="radio" name="question7" value="a"> a) Gostar da agitação e atividades mais enérgicas<br>
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
            echo "<p>Ativo(a)</p>";
            echo "Seu resultado foi de $score";
        } else if ($score >= 1 && $score <= 3) {
            echo "<p>Não ativo(a)</p>";
            echo "Seu resultado foi de $score";
        } else {
            echo "<p>Se o resultado deu 4, revise</p>";
        }
        ?>
        <div class="nextpage">
            <p><a href="#">Ir para o proximo</a></p>
        </div>
        <?php

        ?>

    <?php endif; ?>
</div>