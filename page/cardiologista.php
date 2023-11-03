<?php
    include("../adm/conexao.php");

    if (isset($_POST['fadiga'])) {
        $fadiga = $_POST['fadiga'];
        $peito = $_POST['peito'];
        $exame = $_POST['exame'];
        $data = $_POST['data'];
        $hora = $_POST['hora'];

        $mysqli->query("INSERT INTO cardio ( fadiga, peito, exame , data, hora)
        values ( '$fadiga', '$peito', '$exame' , '$data', '$hora')")
        or die($mysqli->error);

    }

    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/projeto.css">
    <title>Cardiologista</title>
</head>
<body>
<?php
    include("../menu.php");
    ?>
    <div class="consultar">
    <h1> Agende sua consulta com o cardiologista aqui:</h1>
    </div>
   
    

    <div class="card text-bg-dark">
  <img src="../img/luiz_passoslef.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title"></h5>
    <p class="card-text"></p>
    <p class="card-text"><small></small></p>
  </div>
</div>

    <div class="otorrino-container">
    <h2 class="add">Questionário base</h2>
    <form id="cardilogista" action="" method="post">
      <input type="text" name="fadiga" placeholder="Teve fadiga?" required>
      <input type="text" name="peito" placeholder="Teve Dores no peito?" required>
      <input type="text" name="exame" placeholder="Fez exame?" required>
      <input type="date" name="data" placeholder="Escolha uma data" required>
      <input type="time" name="hora" placeholder="Escolha um horário" required>
      <input type="submit" value="Enviar" onclick="return validateFields()">
    </form>
    
  </div>

  <script>
                // Manipule o evento de envio do formulário
                $('#cardiologista').on('submit', function(e) {
                    e.preventDefault(); // Impede o envio padrão do formulário

                    // Coleta os dados do formulário
                    var formData = $(this).serialize();

                    // Faça uma solicitação AJAX para enviar os dados ao servidor
                    $.ajax({
                        type: 'POST',
                        url: 'cardiologista.php', // Substitua 'processa_cadastro.php' pelo nome do arquivo de processamento real
                        data: formData,
                        success: function(response) {
                            if (response === 'success'){
                                // Redirecione para a página de login após o cadastro bem-sucedido
                                Swal.fire({
                                    title: 'Erro',
                                    text: 'Erro no marcar sua consulta!',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                })
                            } else {
                                Swal.fire({
                                    title: 'Sucesso',
                                    text: 'Consulta marcada  com sucesso!',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Redirecione para a página de login após o cadastro bem-sucedido
                                        window.location.href = 'consulta.php'; // Substitua 'login.php' pela página desejada
                                    }
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

      <p><a href="consulta.php">Voltar</a></p>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <?php
  include("../static/rodape.php");
  ?>

  </body>
</html>