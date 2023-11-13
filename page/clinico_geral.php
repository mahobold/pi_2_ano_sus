<?php
include("../adm/conexao.php");

if (isset($_POST['febre'])) {
  $febre = $_POST['febre'];
  $vomito = $_POST['vomito'];
  $nausea = $_POST['nausea'];
  $data = $_POST['data'];
  $hora = $_POST['hora'];

  $mysqli->query("INSERT INTO cliger (febre, vomito, nausea, data, hora )
        values ( '$febre', '$vomito', '$nausea' , '$data', '$hora')")
    or die($mysqli->error);
}



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="icon" href="../img/logo2.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../img/logo2.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/projeto.css">
  <title>Clínico geral</title>
</head>

<body>
  <?php
  include("../menu.php");
  ?>

  <div class="consultar">
    <h1> Agende sua consulta com o clínico geral aqui: </h1>
  </div>


  <div class="d-flex justify-content-center">
    <div class="row">
      <div class="col">
        <div class="card text-bg-dark">
          <img src="../img/Alex_Gonçalveslef.png" class="img-fluid" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <p class="card-text"><small></small></p>
          </div>
        </div>
      </div>

      <div class="col">
        <div id="otorrino-container" class="container-fluid">
          <h2 class="add">Questionário base</h2>
          <form action="" method="post">
            <input type="text" name="febre" placeholder="Teve febre?" required>
            <input type="text" name="vomito" placeholder="Teve vômito?" required>
            <input type="text" name="nausea" placeholder="Teve náuseas?" required>
            <input type="date" name="data" placeholder="Escolha uma data" required>
            <input type="time" name="hora" placeholder="Escolha um horário" required>
            <input type="submit" value="Cadastrar" onclick="return validateFields()">
          </form>
          <p><a href="consulta.php">Voltar</a></p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <?php
  include("../static/rodape.php");
  ?>

</body>

</html>