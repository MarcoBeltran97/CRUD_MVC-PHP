<?php

include '../modelo/ClienteModel.php';

$id = $_GET["id"];

$oCliente = new Cliente;

$oCliente -> deleteCliente($id);

?>