<?php
    include("../adm/conexao.php");  // Arquivo php referente ao banco de dados   
    
    if(isset($_GET['id_pessoa'])){
        $id_pessoa = $_GET['id_pessoa'];
        $sql_consultar = "SELECT * FROM pi_2023_sus_pessoas WHERE id_pessoa = '$id_pessoa'";
        $comando_sql = $mysqli->query($sql_consultar) or die($mysqli->error);
        $usuario = $comando_sql->fetch_assoc();

        if(isset($_POST['btn_deletar'])){ 
    
            $sql_deletar = "DELETE FROM pi_2023_sus_pessoas WHERE id_pessoa = '$id_pessoa'";
    
            $deu_certo = $mysqli->query($sql_deletar) or die ($mysqli->error);

            header("location:../static/sair.php");
            
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
        <link rel="icon" href="../img/logo2.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/projeto.css">
        <title>Deletar Conta</title>
    </head>

    <body>
    <?php
        include("../static/menu_page.php");
    ?>
        <div class="container">
            <h1>Deseja excluir sua conta?</h1>
            <h3>ID do usuário: <?php echo $usuario['id_pessoa']?></h3>
            <p>Nome: <?php echo $usuario['nome']?></p> 
            <form action="" method="post">
                <input name="btn_deletar" class="btn btn-danger" type="submit" value="Deletar">
                <a class="btn btn-primary" href="minha_conta.php">Voltar</a>
            </form>
            
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>