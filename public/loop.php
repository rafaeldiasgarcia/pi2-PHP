<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Estruturas de Repetição</title>
    </head>
    <body>
        <h1>While</h1>
        <ul>
        <?php
            $cont = 0;
            while ($cont <= 10) {
                echo "<li>" . ($cont * 2) . "</li>";
                $cont++; // pós-incremento.
            }
            // While é o loop padrão das linguagens.
        ?>
        </ul>

        <h1>Do.. While</h1>
        <ul>
            <?php
                $cont2 = 11;
                do {
                    echo "<li>" . ($cont2 * 2) . "</li>";
                    $cont2++; 
                } while ($cont2 <= 10);

                // Do..while é semelhante ao while, mas garante que o bloco de código seja executado pelo menos uma vez.
            ?> 
        </ul>

        <h1>For</h1>
        <ul>
            <?php
                for ($cont3 = 0; $cont3 <= 10; $cont3++) {
                    echo "<li>" . ($cont3 * 2) . "</li>";
                }

                // For comum.
            ?>
        </ul>

        <h1>Foreach</h1>
        <?php $frutas = ['Maçã', 'Banana', 'Laranja']; ?> <!-- Cria um "banco de dados" simples -->
        <ul>
            <?php
                foreach ($frutas as $f) {
                    echo "<li>" . $f . "</li>";
                }

                // Foreach é utilizado para iterar sobre arrays. Ele passa por cada elemento do array.
            ?>
        </ul>

        <h1>Foreach - Embedded</h1>
        <ul>
            <?php foreach ($frutas as $f) : ?>
                <li><?= $f ?></li>
            <?php endforeach; ?>

            <!-- Foreach - Embedded é uma forma mais concisa de escrever o loop foreach misturado com HTML -->
        </ul>
    </body>
</html>