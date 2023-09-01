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

//var_dump($usuario);
/* fim teste do professor */


    //* Para MAria */

    if (isset($_POST['foto'])) {
        if (isset($_FILES['foto'])) {
            $arquivo = $_FILES['foto'];
            if ($arquivo['size'] > 15000000) {
                die("Arquivo muito grande!! Max: 15MB");
            }
            if ($arquivo['error']) {
                die("Falha ao enviar arquivo");
            }
        }

        $pasta = "ftperfil/";
        $nome_arquivo = $arquivo['foto'];
        $novo_nome_arquivo = uniqid();
        $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));

        $camimg = $pasta . $novo_nome_arquivo . "."  . $extensao;

        $deucerto = move_uploaded_file($arquivo["foto"], $camimg);

        if ($deucerto) {
            $mysqli->query("INSERT INTO pessoas (camimg) 
                    values ('$camimg')") or die($mysqli->error);
        }
    }
        


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_FILES["foto"])) {

    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check === false) {
        echo "O arquivo não é uma imagem.";
        exit;
    }
    $arquivoUpload = $diretorioUpload . basename($_FILES["foto"]["name"]);
    $extensaoArquivo = strtolower(pathinfo($arquivoUpload, PATHINFO_EXTENSION));
    $extensoesPermitidas = array('jpeg', 'jpg', 'png', 'gif');

    $extensaoArquivo = strtolower(pathinfo($arquivoUpload, PATHINFO_EXTENSION));

    if (!in_array($extensaoArquivo, $extensoesPermitidas)) {
        echo "Tipo de arquivo não suportado.";
        exit;
    }


    $diretorioUpload = $_SERVER['DOCUMENT_ROOT'] . "/imagens/ftperfl/";

    
   


    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $arquivoUpload)) {
        $stmt = $mysqli->prepare("UPDATE pessoas SET camimg = ? WHERE id_pessoa = ?");
        $stmt->bind_param("ss", $arquivoUpload, $id);
        $stmt->execute();

        // Atualize a variável $usuario para refletir a mudança feita
        $usuario["camimg"] = $arquivoUpload;
    } else {
        echo "Ocorreu um erro ao fazer o upload da imagem.";
    }
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dieimes.css">

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

</html>