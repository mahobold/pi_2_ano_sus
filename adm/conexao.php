<?php
    $host="localhost";
    $user="root";
    $pass="";
    $banco="meucod21_aluno_postar";
    
    $mysqli = new mysqli($host, $user, $pass, $banco);


    if ($mysqli->connect_errno){
        echo "Connect faliled: " . $mysqli->connect_error;
        exit();
    }
 
?>