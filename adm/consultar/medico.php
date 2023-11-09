<?php
    include ("../conexao.php");

    $consultar_banco = "SELECT * FROM medico";
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
        <link rel="stylesheet" href="css/dieimes.css">
        <title>Lista - Médicos</title>
    </head>

    <body>
    <?php
            include("../menu.php");
    ?>
        <div class="container">
          <h1>Lista - Médicos</h1>
            <table class="table table-striped">
                <tr>
                    <th>Id do médico:</th>
                    <th>Nome do médico:</th>
                    <th>Idade:</th>
                    <th>CRM:</th>
                    <th>Endereço:</th>
                    <th>Telefone:</th>
                    <th>Especialidade:</th>
                    <th>Alterar</th>
                    <th>Deletar</th>
                </tr>
                    <?php
                        while($medico = $retorno_consulta -> fetch_assoc()){
                        
                    ?>

                <tr>
                   <td><?php echo $medico['id_medico']; ?></td>
                   <td><?php echo $medico['nome']; ?></td>
                   <td><?php echo $medico['idade']; ?></td>
                   <td><?php echo $medico['crm']; ?></td>
                   <td><?php echo $medico['endereco']; ?></td>
                   <td><?php echo $medico['telefone']; ?></td>
                   <td><?php echo $medico['especialidade']; ?></td>
                   <th><a class="btn btn-primary" href="../alterar/alterar_medico.php?id_medico=<?php echo $medico['id_medico'];?>">Alterar</a></th>
                   <th><a class="btn btn-danger" href="../deletar/deletar_medico.php?codigo_medico=<?php echo $medico['id_medico'];?>">Deletar</a></th>
                </tr>
                <?php
                        }
                    ?>

            </table>
            <a class="btn btn-primary" href="../cadastrar/cadastro_medico.php">Voltar</a>
        </div>
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>