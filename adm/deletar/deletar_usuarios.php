<?php
    include("../adm/conexao.php");  // Arquivo php referente ao banco de dados   
    
    if(isset($_GET['id_pessoa'])){
        $id_pessoa = $_GET['id_pessoa'];
        $sql_consultar = "SELECT * FROM pessoas WHERE id_pessoa = '$id_pessoa'";
        $comando_sql = $mysqli->query($sql_consultar) or die($mysqli->error);
        $usuario = $comando_sql->fetch_assoc();

        if(isset($_POST['btn_deletar'])){ 
    
            $sql_deletar = "DELETE FROM pessoas WHERE id_pessoa = '$id_pessoa'";
    
            $deu_certo = $mysqli->query($sql_deletar) or die ($mysqli->error);

            header("location:../consultar/usuarios.php");
            
           // var_dump($mysqli);
        }
    }else{
        echo "Código de consulta indisponível";
    }

?>


<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../../img/logo2.png">
        <title>Deletar - Usuários</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="../../css/projeto.css">
    </head>

    <body>
    <?php
        include("../menu.php");
    ?>
        <div class="container">
            <div class="alterar">
            <h1>Você deseja mesmo deletar essa consulta?</h1>
            <h1>ID: <?php echo $usuario['id_pessoa']?></h1>
            <p>Nome: <?php echo $usuario['nome']?> <?php echo $usuario['sobrenome']?></p>
            <p>Telefone: <?php echo $usuario['telefone']?></p>
            <p>Endereço: <?php echo $usuario['endereco']?></p>
            <p>CPF: <?php echo $usuario['cpf']?></p>
            <p>Data de Nascimento: <?php echo $usuario['datanasc']?></p>
            <p>E-mail: <?php echo $usuario['email']?></p>
            <p>N° do cartão do SUS: <?php echo $usuario['numerocartaosus']?></p>
            <p>Senha: <?php echo $usuario['senha']?></p>
            </div>

            <form action="" method="post">
            

                <button type="button" class="btn btn-outline-success" type="submit" value="Deletar"></button>
<button type="button" class="btn btn-outline-primary"  href="../consultar/usuarios.php">Voltar</button>
            </form>
            
        </div>
        <?php
        include("../rodape.php");
    ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>