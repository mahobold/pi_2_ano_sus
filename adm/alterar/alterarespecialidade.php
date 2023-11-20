<?php
include("../conexao.php");



if (isset($_GET['id_especialidade'])) {
    $id_especialidade = $_GET['id_especialidade'];
    $sql_consultar = "SELECT * FROM cadastro_especialidade WHERE id_especialidade= '$id_especialidade'";
    $mysqli_consultar = $mysqli->query($sql_consultar) or die($mysqli->error);
    $consultar = $mysqli_consultar->fetch_assoc();
    
}

/*
if (isset($_GET['id_medico'])) {
    $id_medico = $_GET['id_medico'];
    $sql_consultar = "SELECT * FROM cadastro_medico WHERE id_medico= '$id_medico'";
    $mysqli_consultar = $mysqli->query($sql_consultar) or die($mysqli->error);
    $consultar = $mysqli_consultar->fetch_assoc();
    
}

*/

if (isset($_POST['especialidade'])) {


    $id_especialidade = $_POST['id_especialidade'];
    $especialidade = $_POST['especialidade'];

    $sql_alterar = "UPDATE cadastro_especialidade
    SET especialidade = '$especialidade', 
    WHERE id_especialidade = '$id_especialidade'";

    $mysqli_alterar = $mysqli->query($sql_alterar) or die($mysqli->error);
}



?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo2.png">
    <title>Alterar - Especialidade</title>
    <link rel="stylesheet" href="../../css/projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <?php
        include("menu.php");
    ?>
    <div class="container">
                <form action="" method="post">
                    <div class="alterar">
                        <h1 class="text-center">Alterar - Especialidade</h1>
                        <label class="form-label" for="">Nome da especialidade</label>
                        </div>
                        <input type="hidden" name="especialidade" value="
                            <?php
                            if(isset($consultar['id_especialidade'])){
                                echo $consultar['id_especialidade']; 
                            }
                            
                            ?>"> 
                        
                        <input class="form-control" type="text" name="especialidade" value="<?php
                        if(isset($consultar['especialidade'])){
                            echo $consultar['especialidade']; 
                        }else{
                            echo "Sem valor";
                        }
                        
                        ?>">


<button type="button" class="btn btn-outline-success" type="submit" value="Alterar">Alterar</button>
<button type="button" class="btn btn-outline-primary" href="lista_cadasespecial.php">Voltar</button>
                   
                </form>

    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>