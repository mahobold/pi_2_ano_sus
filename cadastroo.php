<?php
    include("conexao.php");

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cpf = $_POST['cpf'];
        $datanasc = $_POST['datanasc'];
        $email = $_POST['email'];
        $caminho = "Imagens/foto_perfil.jpg";
        $numerocartaosus = $_POST['numerocartaosus'];
        $senha = password_hash ($_POST['senha'], PASSWORD_DEFAULT);

        $mysqli->query("INSERT INTO pessoas (nome, sobrenome, telefone, endereco, cpf, datanasc, email, numerocartaosus, senha)
        values ('$nome', '$sobrenome', '$telefone', '$endereco', '$cpf', '$datanasc', '$email', '$numerocartaosus', '$senha')")
        or die($mysqli->error);

    }


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="cadas_login.css">
  <title>Tela de Cadastro</title>
</head>




<body>
  <div class="signup-container">
    <div class="iconi">
  <img height="30px" src="img/logo2.png"><h2>Cadastro</h2>
  </div>
    <form action="" method="post">
      <input type="text" name="nome" placeholder="Nome" required>
      <input type="text" name="sobrenome" placeholder="Sobrenome" required>
      <input type="text" name="telefone" placeholder="Telefone" required>
      <input type="text" name="endereco" placeholder="Endereço" required>
      <input type="text" name="cpf" placeholder="CPF" required>
      <input type="text" name="datanasc" placeholder="Data de nascimento" required>
      <input type="text" name="email" placeholder="Email" required>
      <input type="text" name="numerocartaosus" placeholder="Número do cartão Sus" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <input type="submit" value="Cadastrar" onclick="return validateFields()">

    </form>
    <p><a href="login.php">Faça login</a></p>
  </div>

  <!--
  <script>
    function validateFields() {
      var inputs = document.querySelectorAll('input[type="text"], input[type="password"]');
      var controle = false;

      for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].value.trim() !== '') {
          controle = true;
          break;
        }
      }

      if (controle) {
        showAlert();
        return false; // Impede o envio do formulário
      } else {
        controle = false;
        inputs = false;
        return true; // Permite o envio do formulário
      }
    }

     
    function showAlert() {
      Swal.fire({
        text: 'Sucesso ao cadastrar.',
        icon: 'success',
        title: 'Sucesso',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "login.php";
        }
      });
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>

  -->

 

</body>
</html>
