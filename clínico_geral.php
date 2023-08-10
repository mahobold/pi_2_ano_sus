<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="projeto.css">
    <title>clínico geral</title>
</head>
<body>
<?php
    include("menu.php");
    ?>
    <br>
    <br>
    <br>
   <h1> Agende sua consulta com o clínico geral aqui: </h1>
    <br>
    <br>
    <br>
    <h2>Questionário base</h2>
    <img src="img\Alex_Gonçalves.jpg" alt="">
    <br>
    <br>
    <br>
  <form action="" method="post">
        <label>Nome completo:</label>
        <input type="text" name="bt_nome" /><br /><br />
        <label>Idade:</label>
        <input type="text" name="bt_idade" /><br /><br />
        <label>Teve febre?</label>
        <input type="text" name="bt_febres" /><br /><br />
        <label>Teve vômito? </label>
        <input type="text" name="bt_vomito" /><br /><br />
        <label>Teve náuseas?</label>
        <input type="text" name="bt_nausea" /><br /><br />
        <input type="submit" class="btn btn-success" value="Enviar">
        <input type="reset" class="btn btn-danger" value="Limpar">
        </div>
    </form>
    </form>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>