<?php
    include ("conexion.php");
    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];

    $datos= new basedatos();
    $resultado = $datos->login($usuario, $clave);
    $array= mysqli_fetch_array($resultado);

    if ($array['registros']>0) {
        session_start();
        $_SESSION['username']=$usuario;
        header('location:principal.php');
    } else {
        header('location:index.html');
    }
    

?>