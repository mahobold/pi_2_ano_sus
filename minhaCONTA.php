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
    <?php include("menu.php"); ?>

    <div class="container profile-container">
        <div class="text-center mb-4">
            <?php
            $imgPath = isset($usuario["camimg"]) && !empty($usuario["camimg"]) ? $usuario["camimg"] : 'ftperfl/foto_teste.png';
            //echo "Caminho da imagem: " . $imgPath . "<br>";
            if (file_exists($imgPath)) {
                echo "<img class='profile-picture' src='$imgPath' alt='Foto de perfil'>";
            } else {
                echo "<img class='profile-picture' src='ftperfl/foto_teste.png' alt='Foto de perfil'>";
                echo "O arquivo $imgPath não foi encontrado."; // isso é apenas para depuração
            }
            
            
            ?>
            <h1 class="mt-3">Olá <?php echo $usuario["nome"]; ?></h1>
        </div>

        <form action="" method="post" enctype="multipart/form-data" class="mb-4">
            <div class="mb-3">
                <input type="file" name="foto" class="form-control" placeholder="Mudar foto de perfil">
            </div>
            <div class="text-center">
                <input type="submit" value="Envie a sua foto" class="btn btn-primary">
            </div>
        </form>

        <h2 class="mb-3">Minhas informações:</h2>
        <p><span class="info-title">Nome:</span> <?php echo $usuario["nome"]; ?> <?php echo $usuario["sobrenome"]; ?></p>
        <p><span class="info-title">Telefone:</span> <?php echo $usuario["telefone"]; ?></p>
        <p><span class="info-title">Endereço:</span> <?php echo $usuario["endereco"]; ?></p>
        <p><span class="info-title">CPF:</span> <?php echo $usuario["cpf"]; ?></p>
        <p><span class="info-title">Email:</span> <?php echo $usuario["email"]; ?></p>
        <p><span class="info-title">Número do Cartão Sus:</span> <?php echo $usuario["numerocartaosus"]; ?></p>

        <div class="text-center mt-5">
            <a href="consulta.php" class="btn btn-success mb-2">Marque sua Consulta</a>
            <p><a href="sair.php" class="btn btn-danger">Sair</a></p>
        </div>
    </div>

   

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    

</body>
</html>