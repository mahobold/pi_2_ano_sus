<?php
  
?>

<!DOCTYPE html>
<html lang="pt-br">
<<<<<<< HEAD

=======
<<<<<<< HEAD

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="projeto.css">
    <title>Cadastro</title>
</head>

<body>
    <?php
    // include("menu.php");
    ?>
    <div class="container">
        <h1>Minha conta</h1>
        <div >
            <img id="luiz_img_1" src="imagens/teste.webp" class="img-thumbnail" alt="...">
        </div>
        
    </div>
    
    


    <div class="container">
        <div class="azulmarinho">
            <h1>Cadastro</h1>
        </div>
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4">
                <form action="cadastro.php" method="get">
                    <label>Nome completo: </label>
                    <input type="text" name="nome" /><br /><br />
                    <label>CPF: </label>
                    <input type="text" name="data" /><br /><br />
                    <label>RG: </label>
                    <input type="text" name="CC" /><br /><br />
                    <label>Numero de telefone: </label>
                    <input type="text" name="CC" /><br /><br />
                    <label>E-Mail: </label>
                    <input type="text" name="civil" /><br /><br />

            </div>
            <input type="submit" class="btn btn-success" value="Exames">
            <input type="reset" class="btn btn-danger" value="Limpar">
        </div>
        </form>
    </div>
    <div class="col-4">


        <h1>Cartão SUS <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
            </svg></h1>

        <img src="https://cartaodosus.info/wp-content/uploads/2018/12/cartao-sus-online-1.jpg" class="rounded mx-auto d-block" alt="...">


    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>
=======
>>>>>>> Luiz
<head>
  <link rel="stylesheet" href="cadas_login.css">
  <title>Tela de Cadastro</title>
</head>

<body>
  <div class="signup-container">
    <h2>Cadastro</h2>
    <form action="cadastro.php" method="post">
      <input type="text" name="nome" placeholder="Nome Completo" required>
      <input type="text" name="telefone" placeholder="Telefone" required>
      <input type="text" name="endereco" placeholder="Endereço" required>
      <input type="text" name="email" placeholder="Email" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <input type="submit" value="Cadastrar" onclick="return validateFields()">

    </form>
    <p><a href="login.php">Faça login</a></p>
  </div>
  
  <script>
    function validateFields() {
      var inputs = document.querySelectorAll('input[type="text"], input[type="password"]');
      var controle = false;

      for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].value.trim() !== '') {
          controle = true;
          break;
        }
      }

      if (controle) {
        showAlert();
        return false; // Impede o envio do formulário
      } else {
        controle = false;
        inputs = false;
        return true; // Permite o envio do formulário
      }
    }

    function showAlert() {
      Swal.fire({
        text: 'Sucesso ao cadastrar.',
        icon: 'success',
        title: 'Sucesso',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "login.php";
        }
      });
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
</body>
</html>
>>>>>>> main
