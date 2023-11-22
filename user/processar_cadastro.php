<?php
    include("../adm/conexao.php");

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cpf = $_POST['cpf'];
        $datanasc = $_POST['datanasc'];
        $email = $_POST['email'];        
        $numerocartaosus = $_POST['numerocartaosus'];
        $senha = password_hash ($_POST['senha'], PASSWORD_DEFAULT);
        $camimg = "../img/Imagens_recebidos/foto_teste.png";

        $emailCheckQuery = "SELECT * FROM pi_2023_sus_pessoas WHERE email = '$email'";
        $result = $mysqli->query($emailCheckQuery);

        $cpfCheckQuery = "SELECT * FROM pi_2023_sus_pessoas WHERE cpf = '$cpf'";
        $result_cpf = $mysqli->query($cpfCheckQuery);

        if ($result->num_rows > 0) {
            echo 'email_exists';
        } elseif($result_cpf->num_rows > 0){
            echo 'cpf_exists';
        } else {
            $stmt = $mysqli->prepare("INSERT INTO pi_2023_sus_pessoas (nome, sobrenome, telefone, endereco, cpf, datanasc, email, numerocartaosus, senha, camimg) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssssss", $nome, $sobrenome, $telefone, $endereco, $cpf, $datanasc, $email, $numerocartaosus, $senha, $camimg);

            if ($stmt->execute()) {
                echo 'success';
            } else {
                echo 'error';
            }
        }

    }


?>