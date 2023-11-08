<?php
    include("../adm/conexao.php");

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cpf = $_POST['cpf'];
        $datanasc = $_POST['datanasc'];
        $email = $_POST['email'];
        
        $numerocartaosus = $_POST['numerocartaosus'];
        $senha = password_hash ($_POST['senha'], PASSWORD_DEFAULT);
        $camimg = "../img/Imagens_recebidos/foto_teste.png";

        $mysqli->query("INSERT INTO pessoas (nome, sobrenome, telefone, endereco, cpf, datanasc, email, numerocartaosus, senha, camimg)
        values ('$nome', '$sobrenome', '$telefone', '$endereco', '$cpf', '$datanasc', '$email', '$numerocartaosus', '$senha' , '$camimg')")
        or die($mysqli->error);

    }


?>
<!DOCTYPE html>
<html lang="pt-br">

      <head>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
        <link rel="icon" href="img/logo2.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/cadastro_login.css">
        <link rel="stylesheet" href="../css/dieimes.css">
        <title>Tela de Cadastro</title>
</head>

<body>
<?php
        include("../menu.php");
    ?>
  <div class="signup-container">
    <div class="iconi">
  <img height="30px" src="../img/logo2.png"><div id="Login">CADASTRO</div>
  </div>
    <form id="cadastro"  action="" method="post">
      <input type="text" name="nome" placeholder="Nome" required>
      <input type="text" name="sobrenome" placeholder="Sobrenome" required>
      <input id="telefoneInput" type="text" name="telefone" placeholder="Telefone" oninput="formatarTelefone()" maxlength="15" required>
      <input type="text" name="endereco" placeholder="Endereço" required>
      <input id="cpfInput" type="text" name="cpf" placeholder="CPF" oninput="formatarCPF()" maxlength="14" required>
      <input id="nascInput" type="text" name="datanasc" placeholder="Data de nascimento" oninput="formatarNASC()" maxlength="10" required>
      <input type="text" name="email" placeholder="Email" required>
      <input id="csInput" type="text" name="numerocartaosus"  oninput="formatarCS()" maxlength="15" placeholder="Número do cartão Sus" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <input type="submit" value="Cadastrar" onclick="return validateFields()">

    </form>

    <script>
                // Manipule o evento de envio do formulário
                $('#cadastro').on('submit', function(e) {
                    e.preventDefault(); // Impede o envio padrão do formulário

                    // Coleta os dados do formulário
                    var formData = $(this).serialize();

                    // Faça uma solicitação AJAX para enviar os dados ao servidor
                    $.ajax({
                        type: 'POST',
                        url: 'cadastro.php', // Substitua 'processa_cadastro.php' pelo nome do arquivo de processamento real
                        data: formData,
                        success: function(response) {
                            if (response === 'success') {
                                // Redirecione para a página de login após o cadastro bem-sucedido
                                Swal.fire({
                                    title: 'Erro',
                                    text: 'Erro no cadastro!',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                })
                            } else {
                                Swal.fire({
                                    title: 'Sucesso',
                                    text: 'Cadastro criado com sucesso!',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Redirecione para a página de login após o cadastro bem-sucedido
                                        window.location.href = 'login.php'; // Substitua 'login.php' pela página desejada
                                    }
                                });
                            }
                        },
                        error: function() {
                            Swal.fire({
                                title: 'Erro',
                                text: 'Erro na comunicação com o servidor.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                });
            </script>
            

    <p><a href="login.php">Faça login</a></p>
  </div>

 
  <?php
  include("../static/rodape.php");
  ?>

</body>

<script src="../js/cpf.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>
