<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">    
    <link rel="icon" href="img/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/lixo.css">
    <link rel="stylesheet" href="../css/dieimes.css">
    <title>Tela de Cadastro</title>
</head>
<body>
    <?php
        include("../static/menu_page.php");
    ?>
    <div class="container">
        <div class="iconi">
            <img height="30px" src="../img/logo2.png">
            <div id="Login">CADASTRO</div>
        </div>
        <form id="cadastro" action="" method="post">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input class="form-control" type="text" name="nome" placeholder="Nome" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Sobrenome</label>
                <input class="form-control" type="text" name="sobrenome" placeholder="Sobrenome" required>
            
            <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input class="form-control" id="telefoneInput" type="text" name="telefone" placeholder="Telefone" oninput="formatarTelefone()"
                    maxlength="15" required>
            </div>
            <div class="mb-3">  
                <label class="form-label">Endereço</label>
                <input class="form-control" type="text" name="endereco" placeholder="Endereço" required>
            </div>
            <div class="mb-3">
                <label class="form-label">CPF</label>
                <input class="form-control" id="cpfInput" type="text" name="cpf" placeholder="CPF" oninput="formatarCPF()" maxlength="14"
                    required>
            </div>
            <div class="mb-3">                
                <label class="form-label">Data de Nascimento:</label>
                <input class="form-control" id="nascInput" type="text" name="datanasc" placeholder="Data de nascimento" oninput="formatarNASC()"
                    maxlength="10" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input class="form-control" type="text" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Número do Cartão SUS</label>
                <input class="form-control" id="csInput" type="text" name="numerocartaosus" oninput="formatarCS()" maxlength="15"
                    placeholder="Número do cartão Sus" required>
            </div>
            <div class="mb-3"> 
                <label class="form-label">Senha</label>               
                <input class="form-control" type="password" name="senha" placeholder="Senha" required>
            </div>
            <div class="mb-3"> 
                <input class="btn btn-primary" type="submit" value="Cadastrar">
                <a class="btn btn-secondary" href="login.php">Faça login</a>
            </div>
            
        </form>
        <p></p>
    </div>
<?php
    include("../static/rodape.php");
?>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
<script src="../js/validacao.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

</html>