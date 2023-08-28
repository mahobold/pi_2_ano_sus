<?php
    include("conexao.php");
    
    require("autenticacao.php");

    /* teste do professor */

        $id = $_SESSION['login_nome'];

        $stmt = $mysqli->prepare("SELECT * FROM pessoas WHERE id_pessoa = ? LIMIT 1");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $usuario = $result->fetch_assoc();


    /* fim teste do professor */


    //* Para MAria */

    if (isset($_POST['bt_nome'])) {
        if (isset($_FILES['bt_arquivo'])) {
            $arquivo = $_FILES['bt_arquivo'];
            if ($arquivo['size'] > 15000000) {
                die("Arquivo muito grande!! Max: 15MB");
            }
            if ($arquivo['error']) {
                die("Falha ao enviar arquivo");
            }
        }
    
        //var_dump($arquivo);
    
        $nome = $_POST['bt_nome'];
    
        $pasta = "recebidos/";
        $nome_arquivo = $arquivo['name'];
        $novo_nome_arquivo = uniqid();
        $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));
    
    
    
        $caminho = $pasta . $novo_nome_arquivo . "."  . $extensao;
    
    
        /*
            if($extensao != "jpg"){
                die("Tipo de arquivo não aceito");
            }
            */
    
        $nome = $_POST['bt_nome'];
        $quantidade = $_POST['bt_quantidade'];
        $valor = $_POST['bt_valor'];
        $descricao = $_POST['bt_descricao'];
    
        $deucerto = move_uploaded_file($arquivo["tmp_name"], $caminho);
    
        if ($deucerto) {
            $mysqli->query("INSERT INTO cadastro_bebidas (nome_bebida, quantidade, descricao,arquivo_caminho, valor) 
                    values ('$nome', '$quantidade', '$descricao','$caminho', '$valor')") or die($mysqli->error);
        }

        /* FIM Para Maria */

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="projeto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
</head>
<body>
<?php
    include("menu.php");
  ?>    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" placeholder="Mudar foto de perfil">
    </form>
        <div class="ftperfil"></div>
        <h1>Olá <?php echo $usuario["nome"]; ?></h1>
        <h1>Minhas informações:</h1>
        <h2>Nome: <?php echo $usuario["nome"] ;?> <?php echo $usuario["sobrenome"]; ?></h2>
        <h2>Telefone: <?php echo $usuario["telefone"]; ?></h2>
        <h2>Endereço: <?php echo $usuario["endereco"]; ?></h2>
        <h2>CPF: <?php echo $usuario["cpf"]; ?></h2>
        <h2>Email: <?php echo $usuario["email"]; ?></h2>
        <h2>Número do Cartão Sus: <?php echo $usuario["numerocartaosus"]; ?></h2>
        <h1><a href="consulta.php">Marque sua Consulta</a></h1>
        <p><a href="sair.php">Sair</a></p>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>