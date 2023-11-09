<?php
    include ("../conexao.php");

    $consultar_banco = "SELECT * FROM pneu";
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
        <title>Consultas - Pneumologista</title>
    </head>

    <body>
    <?php
            include("../menu.php");
    ?>
        <div class="container">
          <h1>Consultas - Pneumologista</h1>
            <table class="table table-striped">
                <tr>
                    <th>Id Paciente:</th>
                    <th>Tem asma?</th>
                    <th>Fuma? Se sim, com qual frequência?</th>
                    <th>Tem muita fadiga?</th>
                    <th>Data escolhida:</th>
                    <th>Horário escolhido:</th>
                    <th>Alterar data/horário:</th>
                    <th>Deletar:</th>
                </tr>
                    <?php
                        while($consultas_pneumologista = $retorno_consulta -> fetch_assoc()){
                        
                    ?>

                <tr>
                   <td><?php echo $consultas_pneumologista['id_pessoapneu']; ?></td>
                   <td><?php echo $consultas_pneumologista['asma']; ?></td>
                   <td><?php echo $consultas_pneumologista['fuma']; ?></td>
                   <td><?php echo $consultas_pneumologista['fadiga']; ?></td>
                   <td><?php echo $consultas_pneumologista['data']; ?></td>
                   <td><?php echo $consultas_pneumologista['hora']; ?></td>
                   <th><a class="btn btn-primary" href="../alterar/alterar_pneumologista.php?id_pessoapneu=<?php echo $consultas_pneumologista['id_pessoapneu'];?>">Alterar</a></th>
                   <th><a class="btn btn-danger" href="../deletar/deletar_pneumologista.php?id_pessoapneu=<?php echo $consultas_pneumologista['id_pessoapneu'];?>">Deletar</a></th>
                </tr>
                <?php
                        }
                    ?>

            </table>
            <a class="btn btn-primary" href="visualizar_consultas.php">Voltar</a>
        </div>
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>