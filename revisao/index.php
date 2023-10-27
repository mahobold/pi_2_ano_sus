<?php
    include("conexao.php");
    session_start();
    
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
    
        // Usando prepared statements para evitar SQL Injection
        $stmt = $mysqli->prepare("SELECT * FROM tabela_login WHERE login = ? LIMIT 1");
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();
        $usuario = $result->fetch_assoc();
       
        
        // Verificar se o usuário existe
         if (!$usuario) {
            echo "<script>alert('login ou senha incorreto!!');</script>";
            header("Location: login.php");
            exit();
        }
   
        
    
        // Verificar a senha
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['login_nome'] = $usuario['id_login'];
            //var_dump( $usuario);
            header("Location: consultar.php");
           exit();
        } else {
            echo "Usuário não autenticado";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <link rel="stylesheet" href="css.css">
            <title>Revisão</title>
        </head>
        <body>
            <div class="quadro">
                <H1>Faça login:</H1>
                <form action="" method="post">
                    <label>Login:</label>
                    <input type="text" name="login"/><br/><br/>
                    <label>Senha:</label>
                    <input type="text" name="senha"/><br/><br/>
                    <input type="submit" class="btn btn-success" value="Entrar">
                    <input type="reset" class="btn btn-danger" value="Limpar">
                    </div>
                </form>
            </div>
        </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>