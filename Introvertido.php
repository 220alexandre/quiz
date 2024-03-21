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
        <p>De 1 a 3: Introvertido(a)</p>
        <p>De 5 a 7: Extrovertido(a)</p>
        <p>4: Médio</p>
        </p>
    </div>
    <?php if (!isset($_POST['submit'])) : ?>
        <form method="post">
            <p>1. Se você se sente ofendido por alguma ofensa recebida, tem tendência a:</p>
            <input type="radio" name="question1" value="a"> a) Reagir de forma exterior à ofensa<br>
            <input type="radio" name="question1" value="b"> b) Não reagir prontamente, guardando para si o sentimento, reagindo apenas se passar dos limites.<br>
            <input type="radio" name="question1" value="c"> c) Indeciso<br>

            <p>2. De forma geral, sua vontade primeira sobre seu tempo de descanso é:</p>
            <input type="radio" name="question2" value="a"> a) Ter que fazer algo, com alguém ou consigo<br>
            <input type="radio" name="question2" value="b"> b) Fazer pouca coisa, diminuindo o ritmo e curtindo uma certa tranquilidade<br>
            <input type="radio" name="question2" value="c"> c) Indeciso.<br>

            <p>3. Em um ambiente com pessoas que não conhece, tem o impulso de:</p>
            <input type="radio" name="question3" value="b"> b) Ficar mais na sua, sem se envolver muito<br>
            <input type="radio" name="question3" value="a"> a) Conhecer pessoas novas e se misturar<br>
            <input type="radio" name="question3" value="c"> c) Indeciso.<br>

            <p>4. Seu quarto é:</p>
            <input type="radio" name="question4" value="b"> b) Lugar importante, no qual mais fico<br>
            <input type="radio" name="question4" value="a"> a) Lugar de descanso apenas, ambiente comum<br>
            <input type="radio" name="question4" value="c"> c) Indeciso.<br>

            <p>5. Quando lhe acontece coisas importantes (boas ou más), inclina-se a:</p>
            <input type="radio" name="question5" value="b"> b) Contar a muitas pessoas<br>
            <input type="radio" name="question5" value="a"> a) Guardar para si, ou para pouquíssimas pessoas<br>
            <input type="radio" name="question5" value="c"> c) Indeciso.<br>

            <p>6. Depois de se socializar o dia todo, você tende a se sentir:</p>
            <input type="radio" name="question6" value="b"> b) Cansado, como se tivessem te sugado<br>
            <input type="radio" name="question6" value="a"> a) Enérgico, as pessoas te dão energia<br>
            <input type="radio" name="question6" value="c"> c) Indeciso.<br>

            <p>7. Em ambientes abertos, você tem propensão a:</p>
            <input type="radio" name="question7" value="a"> a) Se vestir melhor, para que possam te notar de algum modo<br>
            <input type="radio" name="question7" value="b"> b) Usar roupas mais fechadas ou que te deixam confortável<br>
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
            echo "<p>Extrovertido (a)</p>";
            echo "Seu resultado foi de $score";
        } else if ($score >= 1 && $score <= 3) {
            echo "<p>Introvertido (a)</p>";
            echo "Seu resultado foi de $score";
        } else {
            echo "<p>Médio</p>";
        }
        ?>
        <div class="nextpage">
            <p><a href="#">Ir para o proximo</a></p>
        </div>
        <?php

        ?>

    <?php endif; ?>
</div>