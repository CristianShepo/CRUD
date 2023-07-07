<?php
require_once 'Class/Conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conexion = new Conexion();
    $conexion->Conecta();

    $rut = $_POST['Rut'];
    $nombre = $_POST['Nombres'];
    $apellidoP = $_POST['Apellido_P'];
    $apellidoM = $_POST['Apellido_M'];
    $Direccion = $_POST['Direccion'];
    $Telefono = $_POST['Telefono'];
    $password = $_POST['Clave'];

    $consulta = "UPDATE usuario SET Nombres = '$nombre', Apellido_P = '$apellidoP', Apellido_M = '$apellidoM', Direccion = '$Direccion', Telefono = '$Telefono', Clave = '$password' WHERE Rut = '$rut'";

    $resultado = $conexion->Ejecuta($consulta);

    if ($resultado) {
        echo "Usuario Actualizado exitosamente";
        header('Location: crud.php');
    } else {
        echo "Error al agregar el usuario";
    }
}
?>