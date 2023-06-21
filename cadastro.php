<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="cadas_login.css">
  <title>Tela de Cadastro</title>
</head>
<body>
  <div class="signup-container">
    <h2>Cadastro</h2>
    <form action="cadastro.php" method="post">
      <input type="text" name="nome" placeholder="Nome Completo" required>
      <input type="text" name="telefone" placeholder="Telefone" required>
      <input type="text" name="endereco" placeholder="Endereço" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <input type="submit" value="Cadastrar">
    </form>
    <p><a href="login.php">Faça login</a></p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
        <script>
            function alert(){
                    Swal.fire(
                        {
                            text: 'Sucesso ao cadastrar.',
                            icon: 'success',
                            title: 'Sucesso',
                           
                        }
)
                    }
                    alert("Você será redirecionado");
                           

        </script>
</body>
</html>
