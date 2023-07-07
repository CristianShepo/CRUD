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
    
    $consulta = "INSERT INTO usuario (Rut, Nombres, Apellido_P, Apellido_M, Direccion, Telefono, Clave) VALUES ('$rut', '$nombre', '$apellidoP', '$apellidoM', '$Direccion', $Telefono, '$password')";

    $resultado = $conexion->Ejecuta($consulta);

    if ($resultado) {
        echo "Usuario agregado exitosamente";
        header('Location: registrarid.php');
    } else {
        echo "Error al agregar el usuario";
    }

}
?>