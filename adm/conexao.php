<?php
    $hostname = "localhost";
    $banco = "projeto_sus";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli ($hostname, $usuario, $senha, $banco);

    if($mysqli->connect_errno){
         echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
    }

?>