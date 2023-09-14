<?php
    include("conexao.php");
    session_start();
    
    if (isset($_POST['cpf'])) {
        $login = $_POST['cpf'];
        $senha = $_POST['senha'];
    
        // Usando prepared statements para evitar SQL Injection
        $stmt = $mysqli->prepare("SELECT * FROM pessoas WHERE cpf = ? LIMIT 1");
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();
        $usuario = $result->fetch_assoc();

        //var_dump($usuario);
       
        
        // Verificar se o usuário existe
        /*
         if (!$usuario) {
            echo "<script>alert('login ou senha incorreto!!');</script>";
            header("Location: login.php");
            exit();
        }
        */
   
        
    
        // Verificar a senha
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['login_nome'] = $usuario['id_pessoa'];
            //var_dump( $usuario);
            header("Location: minhaconta.php");
           exit();
        } else {
            echo "Usuário não autenticado";
        }
    }
?>

 

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="icon" href="img/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="cadas_login.css">

    <title>Página de Login</title>
</head>
<body>
 
    <div class="login-container">
        <div class="icon">
        <img  width="35px" src="img/logo2.png"><h2>Login</h2>
        </div>
        <form action="" method="post">
            <input type="text" name="cpf" placeholder="Acesse com seu CPF" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="submit" value="Entrar">
        </form>
        <p><a href="cadastroo.php">Faça cadastro</a></p>
        <p><a href="index.php">Voltar</a></p>
    </div>

    <div class="bloco2">
      </div>

  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>