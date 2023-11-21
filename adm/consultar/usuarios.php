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
    <?php include("../menu.php"); ?>
        <div class="container">
            <div class="especialidade">
          <h1>Lista - Usuários</h1>
          <a href="../index.php">Voltar</a>
            <table class="table table-striped d-flex justify-content-center">
                <tr>
                    <th>Id Pessoa:</th>
                    <th>Nome Completo:</th>
                    <th>Telefone:</th>
                    <th>Endereço</th>
                    <th>CPF:</th>
                    <th>Data de nascimento:</th>
                    <th>Email:</th>
                    <th>N° do cartão SUS:</th>
                    <th>Senha:</th>
                    <th>Alterar:</th>
                    <th>Deletar:</th>
                </tr>
                </div>
                    <?php
                        while($usuario = $retorno_consulta -> fetch_assoc()){
                        
                    ?>
                <tr>
                   <td><?php echo $usuario['id_pessoa'];?></td>
                   <td><?php echo $usuario['nome']; ?><?php echo $usuario["sobrenome"]; ?></td>
                   <td><?php echo $usuario['telefone']; ?></td>
                   <td><?php echo $usuario['endereco']; ?></td>
                   <td><?php echo $usuario['cpf']; ?></td>
                   <td><?php echo $usuario['datanasc']; ?></td>
                   <td><?php echo $usuario['email']; ?></td>
                   <td><?php echo $usuario['numerocartaosus']; ?></td>
                   <td><?php echo $usuario['senha']; ?></td>
                   <th><a class="btn btn-primary" href="../alterar/alterar_usuarios.php?id_pessoa=<?php echo $usuario['id_pessoa'];?>">Alterar</a></th>
                   <th><a class="btn btn-danger" href="../deletar/deletar_usuarios.php?id_pessoa=<?php echo $usuario['id_pessoa'];?>">Deletar</a></th>

                   
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