<?php
    include ("../conexao.php");

    $consultar_banco = "SELECT * FROM cliger";
    $retorno_consulta = $mysqli->query( $consultar_banco) or die($mysqli->error);
    $qntd= $retorno_consulta->num_rows; //retornar quantidade de linhas

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
        <title>Consultas - Clínico geral</title>
    </head>

    <body>
    <?php
            include("../menu.php");
    ?>
        <div class="container">
        <div class="especialidade">
          <h1>Consultas - Clínico geral</h1>
        </div>
            <table class="table table-striped">
                <tr>
                    <th>Id Paciente:</th>
                    <th>Teve febre?</th>
                    <th>Teve vômito?</th>
                    <th>Teve náuseas?</th>
                    <th>Data escolhida:</th>
                    <th>Horário escolhido:</th>
                    <th>Alterar data/horário:</th>
                    <th>Deletar:</th>
                </tr>
                    <?php
                        while($consultas_cliger = $retorno_consulta -> fetch_assoc()){
                        
                    ?>

                <tr>
                   <td><?php echo $consultas_cliger['id_pessoacliger']; ?></td>
                   <td><?php echo $consultas_cliger['febre']; ?></td>
                   <td><?php echo $consultas_cliger['vomito']; ?></td>
                   <td><?php echo $consultas_cliger['nausea']; ?></td>
                   <td><?php echo $consultas_cliger['data']; ?></td>
                   <td><?php echo $consultas_cliger['hora']; ?></td>
                   <th><a class="btn btn-primary" href="../alterar/alterar_clinicogeral.php?id_pessoacliger=<?php echo $consultas_cliger['id_pessoacliger'];?>">Alterar</a></th>
                   <th><a class="btn btn-danger" href="../deletar/deletar_clinicogeral.php?id_pessoacliger=<?php echo $consultas_cliger['id_pessoacliger'];?>">Deletar</a></th>
                </tr>
                <?php
                        }
                    ?>

            </table>
            <a class="btn btn-primary" href="visualizar_consultas.php">Voltar</a>
        </div>
        <?php
        include("../rodape.php");
    ?>
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>