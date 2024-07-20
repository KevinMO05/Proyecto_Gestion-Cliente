<?php
include("../controllers/clienteController.php");

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Clientes Registrados</title>";
echo "<link rel='stylesheet' href='frmConsultar.css'>"; // Enlace al archivo CSS para estilos
echo "</head>";
echo "<body>";

echo "<h1 class='titulo'>CLIENTES REGISTRADOS</h1>";
echo "<div class='tabla-container'>";
echo "<table class='tabla'>";
echo "<thead>";
echo "<tr>";
echo "<th>DNI</th>";
echo "<th>Apellidos</th>";
echo "<th>Nombres</th>";
echo "<th>Correo Electrónico</th>";
echo "<th>Teléfono</th>";
echo "<th>Dirección</th>";
echo "<th>Modificar</th>";
echo "<th>Eliminar</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

$sql = listaClientes(); // Suponiendo que listaClientes() devuelve los datos de la tabla


while ($row = mysqli_fetch_array($sql)) {
    echo "<tr>";
    echo "<td>" . $row['dni'] . "</td>";
    echo "<td>" . $row['apellidos'] . "</td>";
    echo "<td>" . $row['nombres'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['celular'] . "</td>";
    echo "<td>" . $row['direccion'] . "</td>";
    echo '<td><button class="btn-modificar" onclick="location.href=\'frmmodificar.php?dniC=' . $row['dni'] . '\'">Modificar</button></td>';
    echo '<td><button class="btn-eliminar" onclick="location.href=\'../controllers/clienteController.php?dni=' . $row['dni'] . '\'">Eliminar</button></td>';
    echo "</tr>";

  
}

echo "</tbody>";
echo "</table>";
echo "</div>";



echo "</body>";
echo "</html>";
?>
