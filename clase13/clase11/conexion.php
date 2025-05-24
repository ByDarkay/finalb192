<?php

class basedatos{
    private $con;
    private $dbequipo='b8kdfzux1tgrnfwqqclz-mysql.services.clever-cloud.com';
    private $dbusuario='u2u9p55gcykyqciw';
    private $dbclave='gWQcZ8ijtsDRoiAIflsz';
    private $dbnombre='b8kdfzux1tgrnfwqqclz';

    function __construct(){
        $this->conectar();
    }
    
    //método para conectar
    public function conectar(){
        $this->con= mysqli_connect($this->dbequipo, $this->dbusuario, $this->dbclave, $this->dbnombre);

        if ( mysqli_connect_error() ) {
            die("Error de conexión " . mysqli_connect_error() );
        }
    }

    //método para insertar
    public function insertar_reservas($nombre,$celular,$correo,$presupuesto,$destino,$fecha,$observaciones){

        $sql="insert into finalb192
        (res_nombre,res_celular,res_correo,res_presupuesto,res_destino,res_fecha,res_observaciones)
        values('$nombre','$celular','$correo','$presupuesto','$destino','$fecha','$observaciones') ";

        $resultado= mysqli_query($this->con, $sql);

        if ($resultado==true) {
            return true;
        } else {
            return false;
        }   


    }

    //metodo para consultar datos
    public function leer_tabla(){
        $sql="select * from finalb192";
        $resultado= mysqli_query($this->con,$sql);
        return $resultado;
    }


    //metodo para eliminar registros
    public function eliminar_reserva($id){
        $sql="delete from finalb192 where res_id=$id";
        $resultado = mysqli_query($this->con,$sql);
        
        if ($resultado==true){
            return true;
        } else {
            return false;
        }

    }

    //metodo para selccionar registro

    public function seleccionar_registro($id){
        $sql="select * from finalb192 where res_id=$id";
        $resultado = mysqli_query($this->con, $sql);
        $retorno = mysqli_fetch_object($resultado);
        return $retorno;
    }

    //metodo para actualizar reserva
    public function actualizar_reserva($id,$nombre,$celular,$correo,$fecha,$observaciones){
        $sql="
        update finalb192 set res_nombre='$nombre', res_celular='$celular',
        res_correo='$correo', res_fecha= '$fecha', res_observaciones='$observaciones'
        where res_id=$id
        ";

        $res = mysqli_query($this->con, $sql);

        if($res==true){
            return true;
        }else{
            return false;
        }
    }

}//fin clase basedatos


?>