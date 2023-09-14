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
<?php
include("conexao.php");

if (isset($_POST['nome'])) {
    if (isset($_FILES['imagem'])) {
        $arquivo = $_FILES['imagem'];
        if ($arquivo['size'] > 15000000) {
            die("Arquivo muito grande!! Max: 15MB");
        }
        if ($arquivo['error']) {
            die("Falha ao enviar arquivo");
        }
    }

    var_dump($arquivo);

    $nome = $_POST['nome'];

    $pasta = "recebidosmed/";
    $nome_arquivo = $arquivo['imagem'];
    $novo_nome_arquivo = uniqid();
    $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));



    $caminho = $pasta . $novo_nome_arquivo . "."  . $extensao;


    /*
        if($extensao != "jpg"){
            die("Tipo de arquivo não aceito");
        }
        */

    $nome = $_POST['nome'];
    $miligramagem = $_POST['miligramagem'];
    $disponibilidade = $_POST['disponibilidade'];

    $deucerto = move_uploaded_file($arquivo["imagem"], $caminho);

    if ($deucerto) {
        $mysqli->query("INSERT INTO medicamentos (nome, miligramagem, caminho, disponibilidade) 
                values ('$nome', '$miligramagem','$caminho', '$disponibilidade')") or die($mysqli->error);
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
            <link rel="stylesheet" href="projeto.css">
            <title>Cadastro Medicamento</title>
        </head>


        <body>
  <div class="medi-container">
    <h2 class="medi">Cadastro de Medicamentos</h2>
    <form action="" method="post">
      <input type="text" name="nome" placeholder="Nome do medicamento:" required>
      <input type="text" name="miligramagem" placeholder="Miligramagem:" required>
      <input type="file" name="imagem" placeholder="Imagem do Produto:" required>
      <input type="text" name="disponibilidade" placeholder="Disponibilidade:" required>
      
      <input type="submit" value="Adicionar" onclick="return validateFields()">
      <input type="reset" value="Limpar" onclick="return validateFields()">

    </form>

    <div class="cadasmed">
    <p><a href="farmacia.php">Voltar</a></p>
    </div>
  </div>



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>
