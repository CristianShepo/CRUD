<?php
require_once 'Class/Conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conexion = new Conexion();
    $conexion->Conecta();

    $rut = $_POST['Rut'];
    
    //elimina perfil
    $consulta1 = "DELETE FROM perfil WHERE Rut = '$rut'";
    $resultado1 = $conexion->Ejecuta($consulta1);

    //eliminar usuario
    $consulta2 = "DELETE FROM usuario WHERE Rut = '$rut'";
    $resultado2 = $conexion->Ejecuta($consulta2);

    if ($resultado1 && $resultado2) {
        echo "Persona eliminada exitosamente";
        header('Location: crud.php');
    } else {
        echo "Error al eliminar la persona: ";
    }

    $conexion->Desconecta($conexion);
}
?>
