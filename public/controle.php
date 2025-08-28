<?php
// DOCUMENTAÇÃO PHP: https://www.php.net/manual/pt_BR/
    $mensagem = "";

    // POST é um metodo de envio de formulario. Quando o formulario é enviado para o servidor, os dados são enviados via POST.
    if ($_SERVER['REQUEST_METHOD'] == "POST") { // Verifica se o metodo de envio é POST. Se fOR POST então retorna verdadeiro. POST é um metodo de envio de formulario.
       //$mensagem = "Olá ";
       /*
        if ($_POST['periodo'] == "m") { // Verifica o valor do periodo enviado via POST e define a mensagem de acordo com o periodo.
            $mensagem = "Bom dia, ";
        } else if ($_POST['periodo'] == "t") {
            $mensagem = "Boa tarde, ";
        } else {
            $mensagem = "Boa noite, ";
        }
        */
        // DEMOSTÇÃO SWITCH CASE
        switch ($_POST['periodo']) {
            case 'm':
                $mensagem = "Bom dia, ";
                break;
            case 't':
                $mensagem = "Boa tarde, ";
                break;
            case 'n':
                $mensagem = "Boa noite, ";
                break;
            default:
                $mensagem = "Por favor, digite seu nome.";
                break;
        }
        
       $mensagem .= $_POST['nome'] . "!"; // Concatena o nome enviado via POST. .= é o operador de concatenação
    } else {
        $mensagem = "Por favor, digite seu nome.";
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Estruturas de Controle</title>
    </head>
    <body>
        <form action="controle.php" method="post"> <!-- action é para onde o formulario será enviado. method é o metodo de envio do formulario -->
            <label for="nome">Nome:</label>
            <input type="text" name="nome" />
            <select name="periodo">
                <option value="m">Manhã</option>
                <option value="t">Tarde</option>
                <option value="n">Noite</option>
            </select>
            <button type="submit">Enviar</button>
        </form>
        <p><?= $mensagem ?></p> 
    </body>
</html>