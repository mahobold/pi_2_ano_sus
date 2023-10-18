<?php
    include("conexao.php");

    if (isset($_POST['nomemedico'])) {
        $nomemedico = $_POST['nomemedico'];
        $idade = $_POST['idade'];
        $crm = $_POST['crm'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $especialidade = $_POST['especialidade'];
        $mysqli->query("INSERT INTO cadastro_medico (nomemedico, idade, crm, endereco, telefone, especialidade)
        values ('$nomemedico', '$idade', '$crm', '$endereco', '$telefone', '$especialidade')")
        or die($mysqli->error);

    }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/projeto.css">
    <title>Cadastro - Médico</title>
</head>
<body>
    <?php
        include("menu.php");
    ?>
<form action="" method="post">
      <input type="text" name="nomemedico" placeholder="Nome do médico" required>
      <input type="text" name="idade" placeholder="Idade" required>
      <input type="text" name="crm" placeholder="CRM" required>
      <input type="text" name="endereco" placeholder="Endereço" required>
      <input type="text" name="telefone" placeholder="Telefone" required>
      <input type="text" name="especialidade" placeholder="Especialidade" required>
      <input type="submit" value="Cadastrar" onclick="return validateFields()">

    </form>
    <div class="bloco2">
      </div>
    <?php
        include("rodape2.php");
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>