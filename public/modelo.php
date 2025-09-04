<?php
// include_once e require_once garantem que o arquivo seja incluído apenas uma vez e require que o arquivo exista, caso contrário, gera um erro fatal.
require_once ('includes/functions.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>HTML e PHP</title>
</head>
<body>
    <?php
        // teste de quebra de linha
        echo "Teste\n de\n quebra\n de\n linha";
        echo "Teste<br> de<br> quebra<br> de<br> linha";
        // A saida do PHP sempre é um codigo fonte, ou seja, o navegador interpreta como um html;
    ?>
    <p>
        Soma: <?= soma(30, 20) ?> <br> 
        Subtração: <?= subtracaoComRetornoPositivo(20, 60) ?> <br>
        Multiplicação: <?= multiplica(2, 5)?> <br>
        Divisão: <?= divide(10, 2) ?> <br>        
    </p>
</body>
</html> 