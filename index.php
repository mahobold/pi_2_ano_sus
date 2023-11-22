<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/dieimes.css">
  <link rel="icon" href="img/logo2.png">
  <title>Páginia Inicial</title>
</head>

<body>
  <?php
    include("static/menu_index.php");
  ?>
  <?php
    include("page/carrossel.php");
  ?>
  <?php
    include("page/noticia.php");
  ?>
  <?php
    include("page/video.php");
  ?>
  <?php
    include("page/unidades.php");
  ?>
  <?php
    include("page/acesse.php");
  ?>

  <?php
  include("static/rodape2.php");
  ?>
      
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>