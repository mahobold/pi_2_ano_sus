<?php
    include("../adm/conexao.php");

    if (isset($_POST['ouvido'])) {
       
        $ouvido = $_POST['ouvido'];
        $rinite= $_POST['rinite'];
        $audicao = $_POST['audicao'];
        $data = $_POST['data'];
        $hora = $_POST['hora'];

        $mysqli->query("INSERT INTO otorrino ( ouvido, rinite, audicao, data, hora)
        values ( '$ouvido', '$rinite', '$audicao', '$data', '$hora')")
        or die($mysqli->error);

    }


    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/projeto.css">
    <title>otorrinolaringologista</title>
</head>
<body>
<?php
    include("../static/menu_page.php")
    ?>
    <div class="consultar">
    <h1> Agende sua consulta com o otorrinolaringologista aqui: </h1>
    </div>
    
    
    
    <div class="card text-bg-dark">
  <img src="../img/medico14lef.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title"></h5>
    <p class="card-text"></p>
    <p class="card-text"><small></small></p>
  </div>
</div>

    <div class="otorrino-container">
    <h2 class="add">Questionário base</h2>
    <form action="" method="post">
      
      <input type="text" name="ouvido" placeholder="Teve dores no ouvido?" required>
      <input type="text" name="rinite" placeholder="Tem rinite?" required>
      <input type="text" name="audicao" placeholder="Tem boa audição?" required>
      <input type="date" name="data" placeholder="Escolha uma data" required>
      <input type="time" name="hora" placeholder="Escolha um horário" required>
      <input type="submit" value="Enviar" onclick="return validateFields()">
    </form>
    <p><a href="consulta.php">Voltar</a></p>
  </div>
  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

      
  <?php
  include("../static/rodape.php");
  ?>

</body>
</html>