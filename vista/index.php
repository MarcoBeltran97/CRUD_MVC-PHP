<?php

include ('../modelo/Conexion.php');

$oConexion = new bd_conexion;
$oConexion -> Conexion();
$cn = $oConexion->getConexion();

$SQL = "SELECT * FROM cliente";
$query = mysqli_query($cn, $SQL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
    <div class="container">
        <br>
        <a href="../vista/add.php" class="btn btn-success">NUEVO CLIENTE</a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CARGO</th>
                    <th>DIRECCIÓN</th>
                    <th>CIUDAD</th>
                    <th>PAIS</th>
                    <th>TELÉFONO</th>
                </tr>
            </thead>
            <tbody>
                
                <!--Listado en PHP-->
                <?php
                    while($row = mysqli_fetch_assoc($query)){
                ?>
                        <tr>
                            <td><?php echo $row['IdCliente'] ?></td>
                            <td><?php echo $row['NombreCliente'] ?></td>
                            <td><?php echo $row['Cargo'] ?></td>
                            <td><?php echo $row['Direccion'] ?></td>
                            <td><?php echo $row['Ciudad'] ?></td>
                            <td><?php echo $row['Pais'] ?></td>
                            <td><?php echo $row['Telefono'] ?></td>
                            <td><a href="../vista/update.php?id=<?php echo $row['IdCliente'] ?>" class="btn btn-warning">ACTUALIZAR</a></td>
                            <td><a href="../vista/delete.php?id=<?php echo $row['IdCliente'] ?>" class="btn btn-danger btn_delete">ELIMINAR</a></td>
                        </tr>
                <?php
                    }
                ?>

            </tbody>
        </table>
    </div>
    <script src="../JS/Confirmacion.js"></script>
</body>
</html>