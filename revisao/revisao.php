<?php
    include("conexao.php");
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        $senha = password_hash ($_POST['senha'], PASSWORD_DEFAULT);
        $mysqli->query("INSERT INTO tabela_login (login, senha)
        values ('$login', '$senha')")
        or die($mysqli->error);
    }


?>




<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <link rel="stylesheet" href="css.css">
            <title>Revisão</title>
        </head>
        <body>
            <div class="quadro">
                <H1>Cadastre-se</H1>
                <form action="" method="post">
                    <label>Login:</label>
                    <input type="text" name="login"/><br/><br/>
                    <label>Senha:</label>
                    <input type="text" name="senha"/><br/><br/>
                    <input type="submit" class="btn btn-success" value="Cadastrar">
                    <input type="reset" class="btn btn-danger" value="Limpar">
                    </div>
                </form>
            </div>
        </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>
