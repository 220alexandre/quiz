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
        <p>De 1 a 3: Primário(a)</p>
        <p>De 5 a 7: Secundário(a) </p>
        <p>Se o resultado deu 4, revise</p>
        </p>
    </div>
    <?php if (!isset($_POST['submit'])) : ?>
        <form method="post">
            <p>1. Quando te ofendem, você tende a:</p>
            <input type="radio" name="question1" value="a"> a) Guardar e remoer esse acontecimento, sendo difícil esquecer<br>
            <input type="radio" name="question1" value="b"> b) Esquecer e seguir em frente logo depois<br>
            <input type="radio" name="question1" value="c"> c) Indeciso<br>

            <p>2. Em um projeto que participa, você se sente melhor:</p>
            <input type="radio" name="question2" value="b"> b) Improvisando e decidindo a cada momento o que fazer<br>
            <input type="radio" name="question2" value="a"> a) Trabalhando de forma que tudo seja pré-estabelecido e ordenado<br>
            <input type="radio" name="question2" value="c"> c) Indeciso.<br>

            <p>3. Com seus objetos pessoais ou bens, você é mais:</p>
            <input type="radio" name="question3" value="b"> b) Desapegado, conseguindo trocar ou dar a alguém<br>
            <input type="radio" name="question3" value="a"> a) Apegado, como se eles fossem uma extensão de você<br>
            <input type="radio" name="question3" value="c"> c) Indeciso.<br>

            <p>4.  Em sua rotina, de modo geral, inclina-se a:</p>
            <input type="radio" name="question4" value="a"> a) Manter as coisas no seu lugar, sem muitas mudanças de horários<br>
            <input type="radio" name="question4" value="b"> b) Mudar sempre tudo de lugar e gosta de alternar horários<br>
            <input type="radio" name="question4" value="c"> c) Indeciso.<br>

            <p>5. Sobre sua história, você funciona de modo que:</p>
            <input type="radio" name="question5" value="b"> b) Não pensa muito nos acontecimentos, mesmo os importantes<br>
            <input type="radio" name="question5" value="a"> a) Está sempre revivendo com facilidade os momentos em sua mente<br>
            <input type="radio" name="question5" value="c"> c) Indeciso.<br>

            <p>6. Seu jeito de ser, tende a ser:</p>
            <input type="radio" name="question6" value="a"> a) Mais teimoso, com ideias bem firmes<br>
            <input type="radio" name="question6" value="b"> b) Flexível, conseguindo mudar de ideia facilmente<br>
            <input type="radio" name="question6" value="c"> c) Indeciso.<br>

            <p>7. Diante de um esforço maior que precisa colocar em um projeto, tem o impulso de:</p>
            <input type="radio" name="question7" value="b"> b) Abandonar, e começar outra coisa<br>
            <input type="radio" name="question7" value="a"> a) Se manter constante, acabando o que começou<br>
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
            echo "<p>Secundário(a)</p>";
            echo "Seu resultado foi de $score";
        } else if ($score >= 1 && $score <= 3) {
            echo "<p>Primário(a)</p>";
            echo "Seu resultado foi de $score";
        } else {
            echo "<p>Se o resultado deu 4, revise</p>";
        }
        ?>
        <div class="nextpage">
            <p><a href="#">Quer saber mais sobre? clique aqui e receba um ebook gratuito</a></p>
        </div>
        <?php

        ?>

    <?php endif; ?>
</div>