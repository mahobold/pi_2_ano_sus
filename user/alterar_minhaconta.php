<?php
include("../adm/conexao.php");


// Se os dados do médico forem enviados via POST
if (isset($_POST['id_pessoa'])) {
    // Recupere os dados do POST
    $id_pessoa = $_POST['id_pessoa'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $datanasc = $_POST ['datanasc'];
    $email = $_POST['email'];

    // Usando prepared statements para atualizar os dados
    $stmt = $mysqli->prepare("UPDATE pessoas SET nome = ?, sobrenome = ?, telefone = ?, endereco = ?, cpf = ?, datanasc = ?, email = ? WHERE id_pessoa = ?");
    $stmt->bind_param('ssssssss', $nome, $sobrenome, $telefone, $endereco, $cpf, $datanasc, $email, $id_pessoa);
    
    if ($stmt->execute()) {
        $mensagem_sucesso =  "Dados atualizados com sucesso!";
        

    } else {
        echo "Erro ao atualizar: " . $stmt->error;
    }
   
   
    
    $stmt->close();
    
}


// Se o ID do médico for enviado via GET
if (isset($_GET["id_pessoa"])) {
    $id_pessoa = $_GET["id_pessoa"];

    // Usando prepared statements para consultar os dados
    $stmt = $mysqli->prepare("SELECT * FROM pessoas WHERE id_pessoa = ?");
    $stmt->bind_param('s', $id_pessoa);
    $stmt->execute();

    $result = $stmt->get_result();
    $consultar = $result->fetch_assoc();

    $stmt->close();
}
?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo2.png">
    <title>Alterar - Médico</title>
    <link rel="stylesheet" href="../css/projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">



</head>

<body>
    <?php
    include("../menu.php");
    ?>
    <div class="container">
        <div class="alterar">
        <form action="" method="post">
            <h1 class="text-center">Alterar - Minha Conta</h1>
            <label class="form-label" for="">Nome</label>
            </div>
            <input type="hidden" name="id_pessoa" value="<?php if (isset($consultar['id_pessoa'])){echo $consultar['id_pessoa'];}?>">
            <input class="form-control" type="text" name="nome" value="<?php
                                                                                if (isset($consultar['nome'])) {
                                                                                    echo $consultar['nome'];
                                                                                } else {
                                                                                    echo "Sem valor";
                                                                                }

                                                                                ?>">
            <div class="alterar">
            <label class="form-label"  for="">Sobrenome</label>
            </div>
            <input class="form-control" type="text" name="sobrenome" value="<?php
                                                                        if (isset($consultar['sobrenome'])) {
                                                                            echo $consultar['sobrenome'];
                                                                        } else {
                                                                            echo "Sem valor";
                                                                        }

                                                                        ?>">
                                             
            <div class="alterar">
            <label class="form-label" for="">Telefone</label>
            </div>
            <input class="form-control" type="text" name="telefone" value="<?php
                                                                        if (isset($consultar['telefone'])) {
                                                                            echo $consultar['telefone'];
                                                                        } else {
                                                                            echo "Sem valor";
                                                                        }

                                                                        ?>">
            <div class="alterar">
            <label class="form-label" for="">Endereço</label>
            </div>
            <input class="form-control" type="text" name="endereco" value="<?php
                                                                        if (isset($consultar['endereco'])) {
                                                                            echo $consultar['endereco'];
                                                                        } else {
                                                                            echo "Sem valor";
                                                                        }

                                                                        ?>">
            <div class="alterar">
            <label class="form-label" for="">CPF</label>
            </div>
            <input class="form-control" type="text" name="cpf" value="<?php
                                                                            if (isset($consultar['cpf'])) {
                                                                                echo $consultar['cpf'];
                                                                            } else {
                                                                                echo "Sem valor";
                                                                            }

                                                                            ?>">
<div class="alterar">
            <label class="form-label" for="">Data de Nascimento</label>
            </div>
            <input class="form-control" type="text" name="datanasc" value="<?php
                                                                            if (isset($consultar['datanasc'])) {
                                                                                echo $consultar['datanasc'];
                                                                            } else {
                                                                                echo "Sem valor";
                                                                            }

                                                                            ?>">
<div class="alterar">
            <label class="form-label" for="">Email</label>
            </div>
            <input class="form-control" type="text" name="email" value="<?php
                                                                                if (isset($consultar['email'])) {
                                                                                    echo $consultar['email'];
                                                                                } else {
                                                                                    echo "Sem valor";
                                                                                }


                                                                                ?>">
                                                                                </div>
            <div class="d-flex justify-content-center">

            <button type="button" class="btn btn-outline-success" type="submit" value="Alterar">Alterar</button>
<button type="button" class="btn btn-outline-primary"  href="minhaconta.php">Voltar</button>
</div>
        </form>
   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if(isset($mensagem_sucesso)): ?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sucesso!',
        text: '<?php echo $mensagem_sucesso; ?>',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Ok'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "minhaconta.php";  // Redirecione para a página desejada após o usuário clicar em "Ok"
        }
    })
</script>
<?php endif; ?>

</html>