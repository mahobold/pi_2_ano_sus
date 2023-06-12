<!DOCTYPE html>
<html lang="pt-br">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="projeto.css">
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
    <p> <a href="login.php">Faça login</a></p>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>