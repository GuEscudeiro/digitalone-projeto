<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>FORMULÁRIO DE INSCRIÇÃO</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width,  initial-scale=1">
    </head>
    <body>
            <pre>
                <h2>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</h2>
                <form action="script.php" method="post">
                    <?php
                       $mensagem_de_erro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] :'';
                       if(!empty($mensagem_de_erro))
                       {
                           echo $mensagem_de_erro;
                       }
                       $mensagem_de_sucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso']:'';
                       if(!empty($mensagem_de_sucesso))
                       {
                           echo $mensagem_de_sucesso;
                       }
                    ?>
                   <p>Seu nome: <input type="text" name="nome"></p>
                    <p>Sua idade: <input type="text" name="idade"></p>
                   <p><input type="submit" value="Enviar dados do competidor"></p>
                </form>
            </pre>
    </body>
</html>
