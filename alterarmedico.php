<?php
/*
include("conexao.php");



if (isset($_GET['id_medico'])) {
    $id_medico = $_GET['id_medico'];
    $sql_consultar = "SELECT * FROM cadastro_medico WHERE id_medico= '$id_medico'";
    $mysqli_consultar = $mysqli->query($sql_consultar) or die($mysqli->error);
    $consultar = $mysqli_consultar->fetch_assoc();

    

    if (isset($_POST['id_medico'])) {


        $id_medico = $_POST['id_medico'];
        $nomemedico = $_POST['nomemedico'];
        $idade = $_POST['idade'];
        $crm = $_POST['crm'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $especialidade = $_POST['especialidade'];
    
        $sql_alterar = "UPDATE cadastro_medico
        SET nomemedico = '$nomemedico', 
        idade = '$idade',
        crm = '$crm',
        endereco = '$endereco',
        telefone = '$telefone',
        especialidade = '$especialidade'
        WHERE id_medico = '$id_medico'";
    
        $mysqli_alterar = $mysqli->query($sql_alterar) or die($mysqli->error);
    
        //var_dump($mysqli_alterar);
    }
    
}

*/


include("conexao.php");

// Primeiro, verifique se o formulário foi enviado e, em caso afirmativo, processe a submissão
if (isset($_POST['id_medico'])) {

    $id_medico = $_POST['id_medico'];
    $nomemedico = $_POST['nomemedico'];
    $idade = $_POST['idade'];
    $crm = $_POST['crm'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $especialidade = $_POST['especialidade'];

    $sql_alterar = "UPDATE cadastro_medico
    SET nomemedico = '$nomemedico', 
    idade = '$idade',
    crm = '$crm',
    endereco = '$endereco',
    telefone = '$telefone',
    especialidade = '$especialidade'
    WHERE id_medico = '$id_medico'";

    $mysqli_alterar = $mysqli->query($sql_alterar) or die($mysqli->error);

    // Você pode querer redirecionar ou dar uma mensagem de sucesso aqui
}

// Depois, se um ID foi passado via GET, busque os detalhes desse médico para exibição
if (isset($_GET['id_medico'])) {
    $id_medico = $_GET['id_medico'];
    $sql_consultar = "SELECT * FROM cadastro_medico WHERE id_medico= '$id_medico'";
    $mysqli_consultar = $mysqli->query($sql_consultar) or die($mysqli->error);
    $consultar = $mysqli_consultar->fetch_assoc();
}




?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo2.png">
    <title>Alterar - Médico</title>
    <link rel="stylesheet" href="css/dieimes.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <?php
        include("menu.php");
    ?>
    <div class="container">
                <form action="" method="post">
                        <h1 class="text-center">Alterar - Médico</h1>
                        <label class="form-label" for="">Nome</label>
                        <input type="hidden" name="id_medico" value="
                            <?php
                            if(isset($consultar['id_medico'])){
                                echo $consultar['id_medico']; 
                            }
                            
                            ?>"> 
                        
                        <input class="form-control" type="text" name="nomemedico" value="<?php
                        if(isset($consultar['nomemedico'])){
                            echo $consultar['nomemedico']; 
                        }else{
                            echo "Sem valor";
                        }
                        
                        ?>">

                        <label class="form-label" for="">Idade</label>
                        <input class="form-control" type="text" name="idade" value="<?php
                        if(isset($consultar['idade'])){
                            echo $consultar['idade']; 
                        }else{
                            echo "Sem valor";
                        }
                        
                        ?>">

                        <label class="form-label" for="">CRM</label>
                        <input class="form-control" type="text" name="crm" value="<?php
                        if(isset($consultar['crm'])){
                            echo $consultar['crm']; 
                        }else{
                            echo "Sem valor";
                        }
                        
                        ?>">

                        <label class="form-label" for="">Endereço</label>
                        <input class="form-control" type="text" name="endereco" value="<?php
                        if(isset($consultar['endereco'])){
                            echo $consultar['endereco']; 
                        }else{
                            echo "Sem valor";
                        }
                        
                        ?>">

                        <label class="form-label" for="">Telefone</label>
                        <input class="form-control" type="text" name="telefone" value="<?php
                        if(isset($consultar['telefone'])){
                            echo $consultar['telefone']; 
                        }else{
                            echo "Sem valor";
                        }
                        
                        ?>">

                        <label class="form-label" for="">Especialidade</label>
                        <input class="form-control" type="text" name="especialidade" value="<?php
                        if(isset($consultar['especialidade'])){
                            echo $consultar['especialidade']; 
                        }else{
                            echo "Sem valor";
                        }
                        
                        ?>">



                    <input class="btn btn-success" type="submit" value="Alterar">
                    <a class="btn btn-primary" href="lista_cadasmedico.php">Voltar</a>
                </form>

    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>