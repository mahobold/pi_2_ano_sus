<?php
if(!isset($_SESSION)) {
    session_start();
}

// Esvazia o array $_SESSION
$_SESSION = array();

// Destrói a sessão completamente
session_destroy();

header("location: ../user/login.php");
exit();
?>