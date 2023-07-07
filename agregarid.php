<?php
require_once 'Class/Conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conexion = new Conexion();
    $conexion->Conecta();

    $tipoUser = $_POST['Tipo_perfil'];

    $consulta = "INSERT INTO perfil (Tipo_perfil) VALUES ('$tipoUser')";

    $resultado = $conexion->Ejecuta($consulta);

    if ($resultado) {
        echo "Perfil agregado exitosamente";
        header('Location: crud.php');
    } else {
        echo "Error al agregar el perfil: ";
    }

    $conexion->Desconecta($conexion);
}
?>


