<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entregas</title>
    <link rel="stylesheet" href="views/index.css">
</head>

<body>
    <?php
    if (isset($_GET['m'])) {
        $m = $_GET['m'];
        echo '<script language="javascript"> alert("' . $m . '");</script>';
    }?>
   <a href="views/frmInsertar.php"> Registrar Cliente </a><br>
    <a href="views/frmConsultar.php"> Lista de Clientes </a><br>
    
</body>

</html>