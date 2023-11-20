<?php
include("../adm/conexao.php");

require("../static/autenticacao.php");

/* teste do professor */

$id = $_SESSION['login_nome'];

$stmt = $mysqli->prepare("SELECT * FROM pessoas WHERE id_pessoa = ? LIMIT 1");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
$usuario = $result->fetch_assoc();





if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {

    // Verifique se o arquivo é uma imagem
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check === false) {
        die("O arquivo não é uma imagem.");
    }

    // Verifique a extensão do arquivo
    $extensoesPermitidas = array('jpeg', 'jpg', 'png', 'gif');
    $extensaoArquivo = strtolower(pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION));
    if (!in_array($extensaoArquivo, $extensoesPermitidas)) {
        die("Tipo de arquivo não suportado.");
    }

    // Verifique o tamanho do arquivo (por exemplo, limite de 5MB aqui)
    if ($_FILES["foto"]["size"] > 5000000) {
        die("Arquivo muito grande!! Max: 5MB");
    }

    // Defina o local para salvar a imagem
    $diretorioUpload = "../img/Imagens_recebidos/";
    $novoNomeArquivo = uniqid() . "." . $extensaoArquivo;
    $caminhoFinal = $diretorioUpload . $novoNomeArquivo;

   

    // Tente mover o arquivo temporário para o diretório final
    if (!move_uploaded_file($_FILES["foto"]["tmp_name"], $caminhoFinal)) {
        die("Ocorreu um erro ao fazer o upload da imagem.");
    }

    // Atualize o caminho da imagem no banco de dados
    $stmt = $mysqli->prepare("UPDATE pessoas SET camimg = ? WHERE id_pessoa = ?");
    $stmt->bind_param("ss", $caminhoFinal, $id);
    if (!$stmt->execute()) {
        die("Erro ao atualizar o caminho da imagem no banco de dados.");
    }

    // Atualize a variável de sessão para refletir a mudança feita
    $_SESSION["foto_perfil_caminho"] = $caminhoFinal;

    // Redirecione o usuário de volta para a mesma página
    header("Location: minhaCONTA.php");
    exit;


}else if(isset($_FILES["foto"]) && $_FILES["foto"]["error"] != 0) {
    die("Erro no upload do arquivo.");
}





?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/logo2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/dieimes.css">

    <title>Minha Conta</title>
</head>

<body>
    <?php include("../menu.php"); ?>

    <div class="container profile-container">
        <div class="text-center mb-4">
            <?php
            $imgPath = isset($usuario["camimg"]) && !empty($usuario["camimg"]) ? $usuario["camimg"] : 'img/imagens_recebidos/foto_teste.png';
            //echo "Caminho da imagem: " . $imgPath . "<br>";

            //var_dump($imgPath);

            if (file_exists($imgPath)) {
                echo "<img class='profile-picture' src='$imgPath' alt='Foto de perfil'>";
            } else {
                echo "<img class='profile-picture' src='img/imagens_recebidos/foto_teste.png' alt='Foto de perfil'>";
                echo "O arquivo $imgPath não foi encontrado."; // isso é apenas para depuração
            }


            ?>
            <h1 class="mt-3">Olá <?php echo $usuario["nome"]; ?></h1>
        </div>
        
        <form action="minhaCONTA.php" method="post" enctype="multipart/form-data" class="mb-4">
            <div class="mb-3">
                <input type="file" name="foto" class="form-control" placeholder="Mudar foto de perfil" required>
            </div>
            <div class="text-center">
                <input type="submit" value="Envie a sua foto" class="btn btn-primary">
            </div>
        </form>


        <div class="conta">
        <h2 class="mb-3">Minhas informações:</h2>
        <p><span class="info-title">Nome:</span> <?php echo $usuario["nome"]; ?> <?php echo $usuario["sobrenome"]; ?></p>
        <p><span class="info-title">Telefone:</span> <?php echo $usuario["telefone"]; ?></p>
        <p><span class="info-title">Endereço:</span> <?php echo $usuario["endereco"]; ?></p>
        <p><span class="info-title">CPF:</span> <?php echo $usuario["cpf"]; ?></p>
        <p><span class="info-title">Data de nascimento:</span> <?php echo $usuario["datanasc"]; ?></p>
        <p><span class="info-title">Email:</span> <?php echo $usuario["email"]; ?></p>
        <p><span class="info-title">Número do Cartão Sus:</span> <?php echo $usuario["numerocartaosus"]; ?></p>
        <th><a class="btn btn-outline-primary" href="alterar_minhaconta.php?id_pessoa=<?php echo $usuario['id_pessoa'];?>">Alterar</a></th>
        <th><a class="btn btn-outline-danger" href="deletar_minhaconta.php?id_pessoa=<?php echo $usuario['id_pessoa'];?>">Deletar</a></th>
        </div>

        <div class="text-center mt-5">
            <a href="../page/consulta.php" class="btn btn-outline-info">Marque sua consultas</a>
            <a href="minhasconsultas.php" class="btn btn-outline-info">Minhas consulta</a>
            <p><a href="../static/sair.php" class="btn btn-outline-danger">Sair</a></p>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>



    
    <?php
  include("../static/rodape.php");
  ?>


</body>

</html>