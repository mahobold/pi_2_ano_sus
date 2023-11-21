<?php
    include("../conexao.php");  // Arquivo php referente ao banco de dados   
    
    if(isset($_GET['codigo_medico'])){
        $id_medico = $_GET['codigo_medico'];
        $sql_consultar = "SELECT * FROM cadastro_medico WHERE id_medico = '$id_medico'";
        $comando_sql = $mysqli->query($sql_consultar) or die($mysqli->error);
        $medico = $comando_sql->fetch_assoc();

        if(isset($_POST['btn_deletar'])){ 
    
            $sql_deletar = "DELETE FROM cadastro_medico WHERE id_medico = '$id_medico'";
    
            $deu_certo = $mysqli->query($sql_deletar) or die ($mysqli->error);

            header("location:lista_cadasmedico.php");
            
           // var_dump($mysqli);
        }
    }else{
        echo "Código de consulta indisponível";
    }

?>

<?php
    include ("menu.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/logo2.png">
        <title>Deletar - Médico</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/projeto.css">
    </head>

    <body>
    <?php
        include("menu.php");
    ?>
        <div class="container">
            <h1>Tela de exclusão de medico</h1>
            <h1>ID do medico: <?php echo $medico['id_medico']?></h1>
            <p>Nome do médico: <?php echo $medico['nomemedico']?></p> 
            <form action="" method="post">
                <input name="btn_deletar" class="btn btn-danger" type="submit" value="Deletar">
                <a class="btn btn-primary" href="lista_cadasmedico.php">Voltar</a>
            </form>
            
        </div>
        <?php
        include("../rodape.php");
    ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>