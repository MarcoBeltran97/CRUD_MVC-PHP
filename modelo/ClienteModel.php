<?php

include 'Conexion.php';

class Cliente
{

    /*AGREGAR*/
    public function addCliente($vlNombreCliente, $vlCargo, $vlDireccion, $vlCiudad, $vlPais, $vlTelefono)
    {
        $oConexion = new bd_conexion;
        $oConexion->Conexion();
        $con = $oConexion->getConexion();
        $SQL = "INSERT INTO cliente (`NombreCliente`, `Cargo`, `Direccion`, `Ciudad`, `Pais`, `Telefono`) values
        ('$vlNombreCliente','$vlCargo','$vlDireccion','$vlCiudad','$vlPais','$vlTelefono')";

        if(mysqli_query($con, $SQL)){
            header('Location: /vista/index.php');
        }
    }

    public function updateCliente($vlIdCliente, $vlNombreCliente, $vlCargo, $vlDireccion, $vlCiudad, $vlPais, $vlTelefono){
        $oConexion = new bd_conexion;
        $oConexion->Conexion();
        $con = $oConexion->getConexion();
        $SQL = "UPDATE cliente SET `NombreCliente` = '$vlNombreCliente', `Cargo` = '$vlCargo', `Direccion` = '$vlDireccion', `Ciudad` = '$vlCiudad', `Pais` = '$vlPais', `Telefono` = '$vlTelefono' WHERE IdCliente = '$vlIdCliente'";

        if(mysqli_query($con, $SQL)){
            header('Location: /vista/index.php');
        }
    }

    public function deleteCliente($vlIdCliente){
        $oConexion = new bd_conexion;
        $oConexion->Conexion();
        $con = $oConexion->getConexion();
        $SQL = "DELETE FROM cliente WHERE IdCliente = '$vlIdCliente'";

        if(mysqli_query($con, $SQL)){
            header('Location: /vista/index.php');
        }
    }

}
