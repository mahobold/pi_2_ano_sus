<?php
include("menu.php");
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
>>>>>>> b4d7fc29d5f2caf190a024cba5ca0de7c1b3079c

  <link rel="stylesheet" href="projeto.css">
  <title>Neurologista</title>
</head>


<body>
  <div class="container">
    <div class="row">
      <div class="consultar">
        <h1> Agende sua consulta com o neurologista aqui: </h1>
      </div>
      <div class="col-6">
        <div class="card" style="width: 18rem;">
          <img src="img\andre_consultas.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="neuro-contaiiner">
          <h2 class="add">Questionário base</h2>
          <form action="" method="post">
            <input type="text" name="nome" placeholder="Nome Completo" required>
            <input type="text" name="idade" placeholder="Idade" required>
            <input type="text" name="tontura" placeholder="Teve tontura?" required>
            <input type="text" name="cabeca" placeholder="Possui dores de cabeça frequente?" required>
            <input type="text" name="desmaio" placeholder="Tem espamos ou desmaios?" required>
            <input type="submit" value="Cadastrar">
          </form>
          <p><a href="consulta.php">Voltar</a></p>
        </div>
      </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>