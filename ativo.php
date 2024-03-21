
<div class="cont">
        <h1>Saiba se voce é uma pessoa emotiva, responda as questos abaixo</h1>
        <div class="respostas">
            <p>Soma das respostas:
            Valor das alternativas: A= 1, B= 0 e C= 0,5. Após responder toda a sessão de 7 perguntas some o resultado. Resultados com 0,5 são arredondados para baixo.
            <p>De 1 a 3: Introvertido (a)</p>
            <p>De 5 a 7: Extrovertido (a)</p> 
            <p> Médio</p></p>
        </div>
        <?php if (!isset($_POST['submit'])): ?>
            <form method="post">
                <p>1. Diante de um acontecimento com carga emocional, você tende a</p>
                <input type="radio" name="question1" value="a"> a) Reagir de forma exterior à ofensa<br>
                <input type="radio" name="question1" value="b"> b) Não reagir prontamente, guardando para si o sentimento, reagindo apenas se passar dos limites.<br>
                <input type="radio" name="question1" value="c"> c) Indeciso<br>

                <p>2. Quando você não encontra a solução de um problema, inclina-se a:</p>
                <input type="radio" name="question2" value="a"> a) Ter que fazer algo, com alguém ou consigo<br>
                <input type="radio" name="question2" value="b"> b) Fazer pouca coisa, diminuindo o ritmo e curtindo uma certa tranquilidade<br>
                <input type="radio" name="question2" value="c"> c) Indeciso.<br>

                <p>3. Em seus relacionamentos amorosos, você tende a:</p>
                <input type="radio" name="question3" value="b"> b)  Ficar mais na sua, sem se envolver muito<br>
                <input type="radio" name="question3" value="a"> a) Conhecer pessoas novas e se misturar<br>
                <input type="radio" name="question3" value="c"> c) Indeciso.<br>

                <p>4. Quando entram em confronto com você, tem propensão a:</p>
                <input type="radio" name="question4" value="b"> b) Lugar importante, no qual mais fico<br>
                <input type="radio" name="question4" value="a"> a) Lugar de descanso apenas, ambiente comum<br>
                <input type="radio" name="question4" value="c"> c) Indeciso.<br>

                <p>5. Quando pensa no futuro, constantemente você:</p>
                <input type="radio" name="question5" value="b"> b) Contar a muitas pessoas<br>
                <input type="radio" name="question5" value="a"> a) Guardar para si, ou para pouquíssimas pessoas<br>
                <input type="radio" name="question5" value="c"> c) Indeciso.<br>

                <p>6. Seu humor e estado de ânimo, tende a ser:</p>
                <input type="radio" name="question6" value="b"> b) Cansado, como se tivessem te sugado<br>
                <input type="radio" name="question6" value="a"> a) Enérgico, as pessoas te dão energia<br>
                <input type="radio" name="question6" value="c"> c) Indeciso.<br>

                <p>7. Em uma situação complicada e difícil, você se sente geralmente:</p>
                <input type="radio" name="question7" value="a"> a) Se vestir melhor, para que possam te notar de algum modo<br>
                <input type="radio" name="question7" value="b"> b) Usar roupas mais fechadas ou que te deixam confortável<br>
                <input type="radio" name="question7" value="c"> c) Indeciso.<br>

                <input type="submit" name="submit" value="Submit">
            </form>
            
        <?php else: ?>
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
                <p><a href="Introvertido.php">Ir para o proximo</a></p>
                <?php 
                
                ?>
                
        <?php endif; ?>
    </div>
