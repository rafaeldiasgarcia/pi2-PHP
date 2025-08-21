<?php
//require '../vendor/autoload.php';
//use Application\Hello;

// $_GET é uma variavel de ambiente, existe dentro do php
$nome = $_GET['nome'];
// '' para strings literais e "" para variaveis.
$mensagem = "Boa Noite $nome";

$num1 = 10;
$num2 = 30;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="/css/default.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <h1>PHP & Mysql</h1>
    <!-- $mesagem faz escrever oque eu escrevi la em cima na variavel, tem que estar entre os simbulos do php -->
    <p><?= $mensagem ?></p>
    <h3>Primeiro teste usando php</h3>
    <?= $num1 . $num2 ?>
</body>
</html>