<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cliente</title>
    <link rel="stylesheet" href="frminsertar.css">
</head>

<body>
    <h1>Registrar cliente</h1>
    <form method="post" action="../controllers/clienteController.php">
        DNI: <input type="text" name="dni" />
        Apellidos: <input type="text" name="apellido" />
        Nombres : <input type="text" name="nombre" />
        Correo: <input type="text" name="correo" />
        Telefono: <input type="text" name="telefono" />
        Dirección: <input type="text" name="direccion" />
        <input type="submit" name="btnRegistrar" value="Registrar entrega" />
    </form>
</body>

</html>