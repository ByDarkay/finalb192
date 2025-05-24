<?php


class basedatos
{
    private $con;
    private $dbequipo = 'b8kdfzux1tgrnfwqqclz-mysql.services.clever-cloud.com';
    private $dbusuario = 'u2u9p55gcykyqciw';
    private $dbclave = 'gWQcZ8ijtsDRoiAIflsz';
    private $dbnombre = 'b8kdfzux1tgrnfwqqclz';

    //metodo constructor 
    function __construct()
    {
        $this->conectar();
    }

    //metodo para conexion a la BD
    public function conectar()
    {
        $this->con = mysqli_connect($this->dbequipo, $this->dbusuario, $this->dbclave, $this->dbnombre, 3306);

        if (mysqli_connect_error()) {
            die("Error no se pudo conectar" . mysqli_connect_error());
        }
    }//fin conectar

    public function login ($usuario,$clave){
        $sql="select count(*) as registros from usuarios where usuario='$usuario' and clave='$clave'";
        $resultado= mysqli_query($this->con, $sql);
        return $resultado;
    }
}//fin clase

?>