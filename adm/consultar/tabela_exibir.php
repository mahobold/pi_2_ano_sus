<?php
    include ("../conexao.php");

    $consultar_banco = "SELECT * FROM pessoas";
    $retorno_consulta = $mysqli->query( $consultar_banco) or die($mysqli->error);

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../../img/logo2.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="../../css/dieimes.css">
        <title>Lista de usuários</title>
    </head>

    <body>
    <?php include("../../static/menu.php"); ?>
        <div class="container">
            <div class="especialidade">
          <h1>Lista - Usuários</h1>
          </div>
          <a href="../../index.php">Voltar</a>
            <table class="table table-striped">
                <tr>
                    <th>Especialidade médico:</th>
                    <th>Id Pessoa:</th>
                    <th>Nome Completo:</th>
                    <th>Idade:</th>
                    <th>R1</th>
                    <th>R2:</th>
                    <th>R3:</th>
                    <th>Atribuir data e horário:</th>
                </tr>
                    <?php
                        while($usuario = $retorno_consulta -> fetch_assoc()){
                        
                    ?>
                <tr>
                   <td><?php echo $usuario['especialidade'];?></td>
                   <td><?php echo $usuario['id_pessoa'];?></td>
                   <td><?php echo $usuario['nome']; ?></td>
                   <td><?php echo $usuario['idade']; ?></td>
                   <td><?php echo $usuario['r1']; ?></td>
                   <td><?php echo $usuario['r2']; ?></td>
                   <td><?php echo $usuario['r3']; ?></td>
                   <td><input id="nascInput" type="text" name="datanasc" placeholder="Atribua uma data e um horário" oninput="formatarNASC()" maxlength="10" required></td>
                   <td><input id="nascInput" type="submit" placeholder="Enviar" required></td>

                   
                </tr>

                <?php
                        }
                    ?>
            </table>
        </div>
    </body>
<script src="cpf.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>