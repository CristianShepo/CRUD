<?php
require_once 'Class/Conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rut = $_POST['rut'];

    $conexion = new Conexion();
    $conexion->Conecta();

    $consulta = "SELECT * FROM Perfil WHERE Rut = '$rut'";
    $resultado = $conexion->Ejecuta($consulta);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        ?>

        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" href="IMG/logo.png">
            <link rel="stylesheet" href="CSS/style.css">
            <title>Modificar Perfil</title>
        </head>
        <body>
            <div class="login-pagina">
                <div class="login-box">
                    <div class="login-titulo">
                        <b>Q</b>
                        Promotor
                    </div>
                    <div class="login-center">
                        <div class="login-centerInfo">
                            <p class="msg1">Modificar Perfil</p>
                            <form action="actualizar_perfil.php" method="post">
                                <div class="input-login">
                                    <label for="Codigo">ID Perfil</label>
                                    <input type="text" name="Codigo" value="<?php echo $fila['Codigo']; ?>" readonly>
                                </div>
                                <div class="input-login">
                                    <label for="Tipo_perfil">Tipo de Usuario</label>
                                    <input type="text" name="Tipo_perfil" value="<?php echo $fila['Tipo_perfil']; ?>">
                                </div>
                                <div class="input-login">
                                    <label for="Rut">Rut</label>
                                    <input type="text" name="Rut" value="<?php echo $fila['Rut']; ?>" readonly>
                                </div>
                                <div class="input-button">
                                    <button type="submit" class="input-button-boton">Actualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>

        <?php
    } else {
        echo "No se encontró ningún perfil con el Rut proporcionado.";
    }

    $conexion->Desconecta($conexion);
}
?>
