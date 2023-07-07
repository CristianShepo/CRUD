<?php
require_once 'Class/Conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rut = $_POST['Rut'];

    $conexion = new Conexion();
    $conexion->Conecta();

    $consulta = "SELECT * FROM Usuario WHERE Rut = '$rut'";
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
            <title>Modificar Usuario</title>
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
                            <p class="msg1">Modificar Usuario</p>
                            <form action="Actualizar_Usuario.php" method="post">
                                <div class="input-login">
                                    <label for="rut">Rut</label>
                                    <input type="text" name="Rut" value="<?php echo $fila['Rut']; ?>" readonly>
                                </div>
                                <div class="input-login">
                                    <label for="Nombres">Nombres</label>
                                    <input type="text" name="Nombres" value="<?php echo $fila['Nombres']; ?>">
                                </div>
                                <div class="input-login">
                                    <label for="Apellido_P">Apellido Paterno</label>
                                    <input type="text" name="Apellido_P" value="<?php echo $fila['Apellido_P']; ?>">
                                </div>
                                <div class="input-login">
                                    <label for="Apellido_M">Apellido Materno</label>
                                    <input type="text" name="Apellido_M" value="<?php echo $fila['Apellido_M']; ?>">
                                </div>
                                <div class="input-login">
                                    <label for="Direccion">Direccion</label>
                                    <input type="text" name="Direccion" value="<?php echo $fila['Direccion']; ?>">
                                </div>
                                <div class="input-login">
                                    <label for="Telefono">Telefono</label>
                                    <input type="number" name="Telefono" value="<?php echo $fila['Telefono']; ?>">
                                </div>
                                <div class="input-login">
                                    <label for="Clave">Contraseña</label>
                                    <input type="password" name="Clave" value="<?php echo $fila['Clave']; ?>">
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
        echo "No se encontró ningún usuario con el Rut proporcionado.";
    }

    $conexion->Desconecta($conexion);
}
?>