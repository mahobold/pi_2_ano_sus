<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['login_nome'])){
        header("Location:login.php");
        exit();
    }


?>