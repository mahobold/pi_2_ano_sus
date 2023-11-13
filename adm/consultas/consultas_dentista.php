<?php
    include ("../conexao.php");

    $consultar_banco = "SELECT * FROM dentista";
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
        <title>Consultas - Dentista</title>
    </head>

    <body>
    <?php
            include("../menu.php");
    ?>
        <div class="container">
          <h1>Consultas - Dentista</h1>
            <table class="table table-striped">
                <tr>
                    <th>Id Paciente:</th>
                    <th>Quando foi a última ida ao dentista?</th>
                    <th>Veio por motivo estético ou de saúde?</th>
                    <th>Já usou aparelho?</th>
                    <th>Data escolhida:</th>
                    <th>Horário escolhido:</th>
                    <th>Alterar data/horário:</th>
                    <th>Deletar:</th>
                </tr>
                    <?php
                        while($consultas_dentista = $retorno_consulta -> fetch_assoc()){
                        
                    ?>

                <tr>
                   <td><?php echo $consultas_dentista['id_pessoadentista']; ?></td>
                   <td><?php echo $consultas_dentista['ida']; ?></td>
                   <td><?php echo $consultas_dentista['motivo']; ?></td>
                   <td><?php echo $consultas_dentista['aparelho']; ?></td>
                   <td><?php echo $consultas_dentista['data']; ?></td>
                   <td><?php echo $consultas_dentista['hora']; ?></td>
                   <th><a class="btn btn-primary" href="../alterar/alterar_dentista.php?id_pessoadentista=<?php echo $consultas_dentista['id_pessoadentista'];?>">Alterar</a></th>
                   <th><a class="btn btn-danger" href="../deletar/deletar_dentista.php?id_pessoadentista=<?php echo $consultas_dentista['id_pessoadentista'];?>">Deletar</a></th>
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