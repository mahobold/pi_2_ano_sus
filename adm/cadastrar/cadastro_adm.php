<?php
include('../conexao.php');

require('../protecao.php');

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['nome'])) {
    /*----------------------------------*/
    $nome = $_POST['nome'];
    $cod_login = $_POST['cod_login'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $camimg = "../img/Imagens_recebidos/foto_teste.png";
    /*----------------------------------*/
    $mysqli->query("INSERT INTO cadastro_adm (nome, cod_login, senha, cam_img) values('$nome', '$cod_login', '$senha', '$cam_img')") or
        die($mysqlierrno);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/logo2.png">
    <link rel="stylesheet" href="../../css/projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <title> Cadastro - ADM</title>
</head>
<body>
<?php
        include("../menu.php");
    ?>
            <form id="cadastro" action="#" method="post">
                <h2 id="cadastro-text">Cadastro de Administradores</h2>
                <input type="text" name="nome" placeholder="Nome Completo" required>
                <input type="text" name="cod_login" placeholder="Código de acesso:" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <input type="submit" name="cadastrar" value="Cadastrar" onclick="return validateFields()">
            </form>
            <?php
  include("../rodape.php");
  ?>
</body>
</html>