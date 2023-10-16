<?php
    include("conexao.php");

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $febre = $_POST['febre'];
        $vomito = $_POST['vomito'];
        $nausea = $_POST['nausea'];

        $mysqli->query("INSERT INTO cliger (nome, idade, febre, vomito, nausea)
        values ('$nome', '$idade', '$febre', '$vomito', '$nausea')")
        or die($mysqli->error);

    }

    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/projeto.css">
    <title>Clínico geral</title>
</head>
<body>
<?php
    include("menu.php");
    ?>
    
    <div class="consultar">
   <h1> Agende sua consulta com o clínico geral aqui: </h1>
   </div>
   

   
    <div class="card text-bg-dark">
  <img src="img/Alex_Gonçalveslef.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title"></h5>
    <p class="card-text"></p>
    <p class="card-text"><small></small></p>
  </div>
</div>

    <div class="otorrino-container">
    <h2 class="add">Questionário base</h2>
    <form action="" method="post">
      <input type="text" name="nome" placeholder="Nome Completo" required>
      <input type="text" name="idade" placeholder="Idade" required>
      <input type="text" name="febre" placeholder="Teve febre?" required>
      <input type="text" name="vomito" placeholder="Teve vômito?" required>
      <input type="text" name="nausea" placeholder="Teve náuseas?" required>
      <input type="submit" value="Cadastrar" onclick="return validateFields()">
    </form>
    <p><a href="consultaa.php">Voltar</a></p>
  </div>

  <div class="bloco2">
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <?php
  include("rodape2.php");
  ?>

</body>
</html>