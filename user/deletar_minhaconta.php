<?php
    include("../adm/conexao.php");  // Arquivo php referente ao banco de dados   
    
    if(isset($_GET['id_pessoa'])){
        $id_pessoa = $_GET['id_pessoa'];
        $sql_consultar = "SELECT * FROM pessoas WHERE id_pessoa = '$id_pessoa'";
        $sql_deletar = "DELETE FROM pessoas WHERE id_pessoa = '$id_pessoa'";
        $comando_sql = $mysqli->query($sql_consultar) or die($mysqli->error);
        $usuario = $comando_sql->fetch_assoc();

        
            header("location:minhaconta.php");
            
           // var_dump($mysqli);
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        
        <title>Deletar Conta</title>
    </head>

    <body>
    <?php
        include("../menu.php");
    ?>
        <div class="container">
            <h1>Deseja excluir sua conta?</h1>
            <h3>ID do usuário: <?php echo $usuario['id_pessoa']?></h3>
            <p>Nome: <?php echo $usuario['nome']?></p> 
            <form action="" method="post" >
            <input name="btn_deletar" class="btn btn-danger" type="submit" value="Deletar" >
               
                
               
                <a class="btn btn-primary" href="minhaconta.php">Voltar</a>

               
            </form>

           
            
        </div>

       
    </body>
    
    


    
   
   
   
     
       
   
          
          
        
    

   


    
</html>