<?php
    include("../conexao.php");  // Arquivo php referente ao banco de dados   
    
    if(isset($_GET['id_pessoacardio'])){
        $id_pessoacardio = $_GET['id_pessoacardio'];
        $sql_consultar = "SELECT * FROM cardio WHERE id_pessoacardio = '$id_pessoacardio'";
        $comando_sql = $mysqli->query($sql_consultar) or die($mysqli->error);
        $cardiologista = $comando_sql->fetch_assoc();

        if(isset($_POST['btn_deletar'])){ 
    
            $sql_deletar = "DELETE FROM cardio WHERE id_pessoacardio = '$id_pessoacardio'";
    
            $deu_certo = $mysqli->query($sql_deletar) or die ($mysqli->error);

            header("location:../consultas/consultas_cardiologista.php");
            
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
        <title>Deletar - Consultas Cardiologista</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="../../css/dieimes.css">
    </head>

    <body>
    <?php
        include("../menu.php");
    ?>
        <div class="container">
            <h1>Você deseja mesmo deletar essa consulta?</h1>
            <h1>ID: <?php echo $cardiologista['id_pessoacardio']?></h1>
            <p>R1: <?php echo $cardiologista['fadiga']?></p>
            <p>R2: <?php echo $cardiologista['peito']?></p>
            <p>R3: <?php echo $cardiologista['exame']?></p>
            <p>Data: <?php echo $cardiologista['data']?></p>
            <p>Hora: <?php echo $cardiologista['hora']?></p>

            <form action="" method="post">
                <input name="btn_deletar" class="btn btn-danger" type="submit" value="Deletar">
                <a class="btn btn-primary" href="../consultas/consultas_cardiologista.php">Voltar</a>
            </form>
            
        </div>
        <?php
        include("../rodape.php");
    ?>
    </body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>