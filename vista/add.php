<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body>
    <div class="container">
    <br>
        <div>
            <form action="../controlador/ClienteAddController.php" method="POST">
                <div>
                    <h3>Nombre</h3>
                    <input type="text" name="txtnombre" class="form-control">
                </div>
                <div>
                    <h3>Cargo</h3>
                    <input type="text" name="txtcargo" class="form-control">
                </div>
                <div>
                    <h3>Dirección</h3>
                    <input type="text" name="txtdireccion" class="form-control">
                </div>
                <div>
                    <h3>Ciudad</h3>
                    <input type="text" name="txtciudad" class="form-control">
                </div>
                <div>
                    <h3>Pais</h3>
                    <input type="text" name="txtpais" class="form-control">
                </div>
                <div>
                    <h3>Telefono</h3>
                    <input type="text" name="txttelefono" class="form-control">
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-success" value="Agregar Cliente">
                </div>
            </form>
        </div>
    </div>
</body>
</html>