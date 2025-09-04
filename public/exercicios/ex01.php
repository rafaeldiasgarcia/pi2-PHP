<?php
$numA = 1;
$numB = 1;

// usando vetor

$sequencia = [1, 1];
for ($cont = 2; $cont < 10; $cont++) {
    $sequencia[$cont] = $sequencia[$cont - 1] + $sequencia[$cont - 2];
}

// var_dump($sequencia);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?= $numA ?></li>
        <li><?= $numB ?></li>
        <?php for ($cont = 0; $cont < 8; $cont++) : ?>
            <?php
                $aux = $numA + $numB;
                $numA = $numB;
                $numB = $aux;
        ?>
            <li><?= $aux ?></li>
        <?php endfor; ?>
    </ul>
    <h1>Usando Vetor</h1>
    <ul>
        <?php foreach ($sequencia as $num) : ?>
            <li><?= $num ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>