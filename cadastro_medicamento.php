<?php
    include ("conexao.php"); //arquivo php referente ao banco de dados
    if(isset($_POST['nome'])){

        /*-------------------------------*/
        $nome = $_POST['nome'];
        $miligramagem = $_POST['miligramagem'];
        $imagem = $_POST['imagem'];
        $disponibilidade = $_POST['disponibilidade'];
        /*-------------------------------*/

        $mysqli -> query("INSERT INTO medicamentos (nome, miligramagem, imagem, disponibilidade) values ('$nome', '$miligramagem', '$imagem', '$disponibilidade')") or
    die ($mysqli->error);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <link rel="stylesheet" href="projeto.css">
            <title>Cadastro Medicamento</title>
        </head>



<body>

            <form action="cadastro_medicamento.php" method="post">
    
            <form action="cadastro.php" method="post">
                <label>Nome do medicamento: </label>
                <input type="text" name="nome"/><br/><br/>
                <label>Miligramagem: </label>
                <input type="text" name="miligramagem"/><br/><br/>
                <label>Imagem do Produto: </label>
                <input type="text" name="imagem"/><br/><br/>
                <label>Disponibilidade: </label>
                <input type="text" name="disponibilidade"/><br/><br/>
                <input type="submit" class="btn btn-success" value="Adicionar">
                <input type="reset" class="btn btn-danger" value="Limpar">
                </div>
            </form>
        </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>

<!--
<div class="medi-container">
    <h2>Cadastro</h2>
    <form action="cadastro_medicamento.php" method="post">
      <input type="text" name="nome" placeholder="Nome Completo" required>
      <input type="text" name="telefone" placeholder="Telefone" required>
      <input type="text" name="endereco" placeholder="Endereço" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <input type="submit" value="Cadastrar">
    </form>
    <p><a href="farmacia.php">Faça login</a></p>
  </div>
-->

<?php
  include("rodape.php");
  ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>
