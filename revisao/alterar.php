<?php
include("conexao.php");
if (isset($_POST['id_login'])) {
    $id_login = $_POST['id_login'];
    $sql_consultar = "SELECT * FROM tabela_login WHERE id_login= '$id_login'";
    $mysqli_consultar = $mysqli->query($sql_consultar) or die($mysqli->error);
    $consultar = $mysqli_consultar->fetch_assoc();
    
}

if (isset($_POST['login'])) {


    $id_login = $_POST['id_login'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql_alterar = "UPDATE tabela_login
    SET login = '$login', 
    senha = '$senha'
    WHERE id_login = '$id_login'";

    $mysqli_alterar = $mysqli->query($sql_alterar) or die($mysqli->error);
}



?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão - Cadastrar</title>
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <div class="container">
                <form action="" method="post">
                        <label class="form-label" for="">Digite o ID do login para alteração:</label>
                        <input class="form-control" type="text" name="id_login">
                    <input class="btn btn-success" type="submit" value="Consultar">
                    
                </form>
                <form action="" method="post">
                        <h1 class="text-center">Revisão - Cadastrar</h1>
                        <label class="form-label" for="">Login</label>
                        <input type="hidden" name="login" value="
                            <?php
                            if(isset($consultar['id_login'])){
                                echo $consultar['id_login']; 
                            }
                            
                            ?>"> 
                        
                        <input class="form-control" type="text" name="login" value="<?php
                        if(isset($consultar['login'])){
                            echo $consultar['login']; 
                        }else{
                            echo "Sem valor";
                        }
                        
                        ?>">

                        <label class="form-label" for="">Senha</label>
                        <input class="form-control" type="text" name="senha" value="<?php
                        if(isset($consultar['senha'])){
                            echo $consultar['senha']; 
                        }else{
                            echo "Sem valor";
                        }
                        
                        
                        
                        ?>">

                    <input class="btn btn-success" type="submit" value="Cadastrar">
                    <input class="btn btn-danger" type="reset">
                </form>

    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>