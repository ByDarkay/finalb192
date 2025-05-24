<?php
    session_start();
    $usuario=$_SESSION['username'];

    if (!isset($usuario)) {
        header("location:index.html");
    } else {
        header("location:/clase13/clase11/index.php");
    }
    
?>