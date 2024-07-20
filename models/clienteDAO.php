<?php
include("conexion.php");
function insertar($dni, $apellido, $nombre, $correo, $telefono, $direccion)
{
    global $cn;
    $sql = "INSERT INTO tcliente( dni,apellidos,nombres,email,celular,direccion ) VALUES ('$dni','$apellido','$nombre','$correo','$telefono','$direccion')";
    if (mysqli_query($cn, $sql)) {
        return "Los datos fueron registrados con exitoll!";
    } else {
        return "ERROR, los datos no registraron???";
    }
}
function getClientes()
{
    global $cn;
    $sql = "SELECT * FROM tcliente";
    return mysqli_query($cn, $sql);
}
function consultarClientes($dniC)
{
    global $cn;
    $sql = "SELECT * FROM tcliente WHERE dni='" . $dniC . "'";
    return mysqli_query($cn, $sql);
}
function modificar($dni, $apellido, $nombre, $correo, $telefono, $direccion)
{
    global $cn;
    $sql = "UPDATE tcliente SET dni='$dni', apellidos=' $apellido ', nombres=' $nombre ', email=' $correo ' , celular='$telefono', direccion=' $direccion ' WHERE dni='$dni'";
    if (mysqli_query($cn, $sql)) {
        return "Los datos fueron modificados de manera correcta";
    } else {
        return "ERROR, No se pudo actualizar los datos";
    }
}
function eliminarCurso($dni)
{
    global $cn;
    $sql = "DELETE FROM tcliente WHERE dni='" . $dni . "'";
    if (mysqli_query($cn, $sql)) {
        return "El curso fue eliminado con Exito!!!";
    } else {
        return "ERROR, El curso NO eliminado";
    }
}
