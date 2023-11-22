<?php
    include("../adm/conexao.php");
    session_start();
    
    if (isset($_POST['cpf'])) {
        $login = $_POST['cpf'];
        $senha = $_POST['senha'];
    
        // Usando prepared statements para evitar SQL Injection
        $stmt = $mysqli->prepare("SELECT * FROM pi_2023_sus_pessoas WHERE cpf = ? LIMIT 1");
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();
        $usuario = $result->fetch_assoc();

        
    
        // Verificar a senha
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['login_nome'] = $usuario['id_pessoa'];
            $_SESSION['nome'] = $usuario['nome'];
            //var_dump( $usuario);
            header("Location: minha_conta.php");
           exit();
        } else {
            echo "Login ou senha incorretos";
        }
    }
?>

 

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="icon" href="../img/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cadastro_login.css">
    <link rel="stylesheet" href="../css/dieimes.css">

    <title>Página de Login</title>
</head>
<body>
    <?php
        include("../static/menu_page.php");
    ?>
    <div class="container d-flex justify-content-center">
    <div class="login-container">
        <div class="icon">
        <img  width="35px" src="../img/logo2.png"><div id="Login">LOGIN</div>
        </div>
        <form action="" method="post">
            <input id="cpfInput" type="text" name="cpf" placeholder="Acesse com seu CPF" oninput="formatarCPF()" maxlength="14" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="submit" value="Entrar">
        </form>
        <p><a href="cadastro.php">Faça cadastro</a></p>
        <p><a href="../index.php">Voltar</a></p>
    </div>
    </div>
    

     
    <?php
  include("../static/rodape.php");
  ?>
  </body>
<script src="../js/cpf.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>