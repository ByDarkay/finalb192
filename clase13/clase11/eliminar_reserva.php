<?php
    include ('conexion.php');

    if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $reserva = new basedatos();
        $res= $reserva->eliminar_reserva($id);

        if($res==true){
            header("location:listar.php");
        } else{
            echo "Error al eliminar ";
        }
    }
?>
