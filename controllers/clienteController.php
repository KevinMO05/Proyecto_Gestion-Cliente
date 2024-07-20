<?php
include("../models/clienteDAO.php");
if (isset($_POST['btnActualizar'])) { //Modificar
    $dni = $_POST['dni'];
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $m = modificar($dni, $apellido, $nombre, $correo, $telefono, $direccion);
    header("Location: ../index.php?m=$m");
} else if (isset($_GET['dni'])) { //Eliminar
    $dni = $_GET['dni'];
    $m = eliminarCurso($dni);
    header("Location: ../index.php?m=$m");
} else if (isset($_POST['btnRegistrar'])) { //Registrar
    $dni = $_POST['dni'];
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $m = insertar($dni, $apellido, $nombre, $correo, $telefono, $direccion);
    header("Location: ../index.php?m=$m");
}
function consultarCur($dniC)
{
    return consultarClientes($dniC);
}
function listaClientes()
{
    return getClientes();
}
