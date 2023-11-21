<?php
include("conexao.php");

if (isset($_POST['cod_login']) && isset($_POST['senha'])) {
  $cod_login = $mysqli->real_escape_string($_POST['cod_login']);
  $senha = $mysqli->real_escape_string($_POST['senha']);

  if (empty($cod_login) || empty($senha)) {
    echo 'Preencha todos os campos.';
  } else {
    $sql_code = "SELECT * FROM cadastro_adm WHERE cod_login = '$cod_login'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);
    $usuario = $sql_query->fetch_assoc();

    if ($usuario !== null && password_verify($senha, $usuario['senha'])) {
      if (!isset($_SESSION['id_adm'])) {
        session_start();
      }

      $_SESSION['id_adm'] = $usuario['id_adm'];
      $_SESSION['nome'] = $usuario['nome'];
      $_SESSION['cod_login'] = $usuario['cod_login'];
      $_SESSION['senha'] = $usuario['senha'];


    }
  }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo2.png">
    <link rel="stylesheet" href="../css/projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <title> Login - ADM</title>
</head>
<body>
<?php
    include("menu_adm.php");
    ?>
<form id="cadastro" action="index.php" method="post">
        <h1>Login de Administrador</h1>
        <input type="text" name="cod_login" placeholder="Código de acesso" required>
        <input type="password" name="senha" placeholder="Senha de Administrador" required>
        <input type="submit" value="Entrar">
      </form>
    <?php
    include("rodape_adm.php");
    ?>
</body>
</html>