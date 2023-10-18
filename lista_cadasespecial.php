<?php
    include ("conexao.php");

    $consultar_banco = "SELECT * FROM cadastro_especialidade";
    $retorno_consulta = $mysqli->query( $consultar_banco) or die($mysqli->error);
    $qntd= $retorno_consulta->num_rows; //retornar quantidade de linhas

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/logo2.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/dieimes.css">
        <title>Lista de especialidades</title>
    </head>

    <body>
    <?php
            include("menu.php");
    ?>
        <div class="container">
          <h1>Lista - Especialidades</h1>
            <table class="table table-striped">
                <tr>
                    <th>Nome do cliente:</th>
                    <th>Endereço:</th>
                    <th>Funçôes:</th>
                </tr>
                    <?php
                        while($especialidades = $retorno_consulta -> fetch_assoc()){
                        
                    ?>

                <tr>
                   <td><?php echo $especialidades['id_especialidade']; ?></td>
                   <td><?php echo $especialidades['especialidade']; ?></td>
                   <th><a class="btn btn-danger" href="deletarespecial.php?codigo_especialidade=<?php echo $especialidades['id_especialidade'];?>">Deletar</a></th>
                </tr>
                <?php
                        }
                    ?>

            </table>
            <a class="btn btn-primary" href="lista_pedidos.php">Voltar</a>
        </div>
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>