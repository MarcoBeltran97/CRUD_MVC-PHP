<?php
class bd_conexion
{

    public $commandConexion;

    function Conexion()
    {
        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $databasename = "CLIENTE_PHP";

        $conn = mysqli_connect($servername, $username, $password, $databasename);
        if ($conn == null) {
            die("Error al conectar" . mysqli_connect_error());
        }
        $this->commandConexion = $conn;
    }

    function getConexion()
    {
        return $this->commandConexion;
    }

}
