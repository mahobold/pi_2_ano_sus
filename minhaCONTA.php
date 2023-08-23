<?php
    include("conexao.php");
    
    require("revisao/autenticacao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="projeto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
</head>
<body>
<?php
    include("menu.php");
  ?>
        <h1>Olá ...</h1>
        <h1>Minhas informações:</h1>
        <h2>Nome:</h2>
        <h2>Telefone:</h2>
        <h2>Endereço:</h2>
        <h2>CPF:</h2>
        <h2>Email:</h2>
        <h2>Número do Cartão Sus:</h2>
        <h1><a href="consulta.php">Marque sua Consulta</a></h1>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>