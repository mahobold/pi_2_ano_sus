<?php
    include("../conexao.php");  // Arquivo php referente ao banco de dados   
    
    if(isset($_GET['id_pessoacliger'])){
        $id_pessoacliger = $_GET['id_pessoacliger'];
        $sql_consultar = "SELECT * FROM cliger WHERE id_pessoacliger = '$id_pessoacliger'";
        $comando_sql = $mysqli->query($sql_consultar) or die($mysqli->error);
        $clinicogeral = $comando_sql->fetch_assoc();

        if(isset($_POST['btn_deletar'])){ 
    
            $sql_deletar = "DELETE FROM cliger WHERE id_pessoacliger = '$id_pessoacliger'";
    
            $deu_certo = $mysqli->query($sql_deletar) or die ($mysqli->error);

            header("location:../consultas/consultas_clinicogeral.php");
            
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
        <title>Deletar - Consultas Clínico Geral</title>
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
            <h1>ID: <?php echo $clinicogeral['id_pessoacliger']?></h1>
            <p>R1: <?php echo $clinicogeral['febre']?></p>
            <p>R2: <?php echo $clinicogeral['vomito']?></p>
            <p>R3: <?php echo $clinicogeral['nausea']?></p>
            <p>Data: <?php echo $clinicogeral['data']?></p>
            <p>Hora: <?php echo $clinicogeral['hora']?></p>
            </div>

            <form action="" method="post">
               
                <button type="button" class="btn btn-outline-success" type="submit" value="Deletar">Alterar</button>
<button type="button" class="btn btn-outline-primary"  href="../consultas/consultas_clinicogeral.php">Voltar</button>
            </form>
            
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>