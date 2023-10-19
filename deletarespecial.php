<?php
    include("conexao.php");  // Arquivo php referente ao banco de dados   
    
    if(isset($_GET['codigo_especialidade'])){
        $id_especialidade = $_GET['codigo_especialidade'];
        $sql_consultar = "SELECT * FROM cadastro_especialidade WHERE id_especialidade = '$id_especialidade'";
        $comando_sql = $mysqli->query($sql_consultar) or die($mysqli->error);
        $especialidades = $comando_sql->fetch_assoc();

        if(isset($_POST['btn_deletar'])){ 
    
            $sql_deletar = "DELETE FROM cadastro_especialidade WHERE id_especialidade = '$id_especialidade'";
    
            $deu_certo = $mysqli->query($sql_deletar) or die ($mysqli->error);

            header("location:lista_cadasespecial.php");
            
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/projeto.css">
        <title>Deletar - Especialidades</title>
    </head>

    <body>
        <div class="container">
            <h1>Tela de exclusão de especialidades</h1>
            <h1>ID da especialidade: <?php echo $especialidades['id_especialidade']?></h1>
            <p>Nome: <?php echo $especialidades['especialidade']?></p> 
            <form action="" method="post">
                <input name="btn_deletar" class="btn btn-danger" type="submit" value="Deletar">
                <a class="btn btn-primary" href="lista_cadasespecial.php">Voltar</a>
            </form>
            
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>