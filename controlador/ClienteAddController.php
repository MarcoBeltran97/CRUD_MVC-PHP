<?php

include '../modelo/ClienteModel.php';

$nombre = $_POST["txtnombre"];
$cargo = $_POST["txtcargo"];
$direccion = $_POST["txtdireccion"];
$ciudad = $_POST["txtciudad"];
$pais = $_POST["txtpais"];
$telefono = $_POST["txttelefono"];

$oCliente = new Cliente;

$oCliente -> addCliente($nombre,$cargo,$direccion,$ciudad,$pais,$telefono);

?>