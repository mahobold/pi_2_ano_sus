<?php
include("../conexao.php");

if (isset($_POST['especialidade'])) {
    $especialidade = $_POST['especialidade'];
    $mysqli->query("INSERT INTO cadastro_especialidade (especialidade)
        values ('$especialidade')")
        or die($mysqli->error);
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/projeto.css">
    <title>Cadastro - Especialidade</title>
</head>

<body>
    <?php
        include("../menu.php");
    ?>

<<<<<<< HEAD
          
        <div class="novo">
          Cadastrar - Especialidade
          </div>
          <div class="cadastrar">
    <form  action="" method="post">
   
           
  
        <input type="text" name="especialidade" placeholder="Especialidade" required>
        
=======
            <div class="alterar">
            <h1 class="text-center">Cadastrar - Especialidade</h1>
            </div>
    <form  action="" method="post">
        <div class="espe">
        <div class="input-group mb-3">
  
        <input type="text" name="especialidade" placeholder="Especialidade" required>
        </div>
>>>>>>> Dieimes
        <input type="submit" value="Cadastrar" onclick="return validateFields()">
        </div>
    </form>
<<<<<<< HEAD
    
    <div class="d-flex justify-content-center">

    <button type="button" class="btn btn-outline-primary" href="index.php">Voltar</button>
<button type="button" class="btn btn-outline-secondary" href="lista_cadasespecial.php">Ver lista</button>
</div>

=======
    <button type="button" class="btn btn-outline-primary" href="index.php">Voltar</button>
<button type="button" class="btn btn-outline-secondary" href="lista_cadasespecial.php">Ver lista</button>
  
    
>>>>>>> Dieimes
    <?php
        include("rodape2.php");
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>