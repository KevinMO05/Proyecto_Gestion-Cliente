<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cliente</title>
    <link rel="stylesheet" href="frmModificar.css">
</head>

<body>
    <h1>Modificar cliente</h1>
    
    <?php
    include("../controllers/clienteController.php");
    if (isset($_GET['dniC'])) {
        $dniC = $_GET['dniC'];
        $datos = consultarCur($dniC); // Asumo que este es el método correcto para consultar un cliente por DNI
        if ($row = mysqli_fetch_array($datos)) {
            $dni = $row['dni'];
            $apellido = $row['apellidos'];
            $nombre = $row['nombres'];
            $correo = $row['email'];
            $telefono = $row['celular'];
            $direccion = $row['direccion'];
            ?>
            
            <form method='post' action='../controllers/clienteController.php'>
                DNI: <input type='text' name='dni' value='<?php echo $dni; ?>'/><br>
                Apellidos: <input type='text' name='apellido' value='<?php echo $apellido; ?>'/><br>
                Nombre: <input type='text' name='nombre' value='<?php echo $nombre; ?>'/><br>
                Correo: <input type='text' name='correo' value='<?php echo $correo; ?>'/><br>
                Telefono: <input type='text' name='telefono' value='<?php echo $telefono; ?>'/><br>
                Direccion: <input type='text' name='direccion' value='<?php echo $direccion; ?>'/><br>
                <input type='submit' name='btnActualizar' value='Actualizar Cliente'/>
            </form>
            
            <?php
        } else {
            echo "No se encontraron datos para el cliente con DNI: " . $dniC;
        }
    } else {
        echo "No se proporcionó el DNI del cliente a modificar.";
    }
    ?>
</body>

</html>
