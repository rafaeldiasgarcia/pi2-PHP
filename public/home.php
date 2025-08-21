<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Página Principal</title>
    </head>
    <body>
        <h1>Página Principal</h1>
        <p>Primeiro Exemplo de Página Dinâmica</p>
        <?php
        // include('./includes/naotem.php'); // não emo arquivo, warning
        // require('./includes/naotem.php'); // se o arquivo requerido nao existe ele para a execução, fatal error
        

        include('./includes/teste.php');
        include_once('./includes/teste.php'); // tenta chamar o include, mas se eu ja chamei ele ignora
        ?>
    </body>
</html>