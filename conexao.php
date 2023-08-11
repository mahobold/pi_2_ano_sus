<?php
    $hostname = "localhost";
    $banco = "pi_sus";
    $usuario = "Maria";
    $senha = "9809";

    $mysqli = new mysqli ($hostname, $usuario, $senha, $banco);

    if($mysqli->connect_errno){
         echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
    }

?>