<?php
require_once 'Class/Conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Codigo = $_POST['Codigo'];
    $TipoUser = $_POST['TipoUser'];
    $Rut = $_POST['Rut'];

    $conexion = new Conexion();
    $conexion->Conecta();

    $consulta = "UPDATE Perfil SET Codigo = '$Codigo', TipoUser = '$TipoUser' WHERE Rut = '$Rut'";
    $resultado = $conexion->Ejecuta($consulta);

    if ($resultado) {
        echo "Perfil actualizado exitosamente";
        header('Location: crud.php');
    } else {
        echo "Error al actualizar el perfil: ";
    }

    $conexion->Desconecta($conexion);
}
?>
