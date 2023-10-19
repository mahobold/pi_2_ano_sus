<?php
include("conexao.php");

if (isset($_POST['especialidade'])) {
    $especialidade = $_POST['especialidade'];
    $mysqli->query("INSERT INTO cadastro_especialidade (especialidade)
        values ('$especialidade')")
        or die($mysqli->error);
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/projeto.css">
    <title>Cadastro - Especialidade</title>
</head>

<body>
    <?php
        include("menu.php");
    ?>

    
    <form id="cadastro" action="" method="post">
        <input type="text" name="especialidade" placeholder="Especialidade" required>
        <input type="submit" value="Cadastrar" onclick="return validateFields()">

    </form>
<<<<<<< HEAD
<<<<<<< HEAD
    <a class="btn btn-primary" href="lista_cadasmedico.php">Voltar</a>
=======
    <script>
                // Manipule o evento de envio do formulário
                $('#cadastro').on('submit', function(e) {
                    e.preventDefault(); // Impede o envio padrão do formulário

                    // Coleta os dados do formulário
                    var formData = $(this).serialize();

                    // Faça uma solicitação AJAX para enviar os dados ao servidor
                    $.ajax({
                        type: 'POST',
                        url: 'cadastro_especialidade.php', // Substitua 'processa_cadastro.php' pelo nome do arquivo de processamento real
                        data: formData,
                        success: function(response) {
                            if (response === 'success') {
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
            

>>>>>>> Le_Fernanda
    <div class="bloco2">
      </div>
=======
>>>>>>> Matheus
    <?php
        include("rodape2.php");
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>