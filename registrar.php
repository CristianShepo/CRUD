<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IMG/logo.png">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Registrarse</title>
</head>
<body>
    <div class="login-pagina">
        <div class="login-box">
            <div class="login-titulo">
                <b>QPromotor</b>
                
            </div>
            <div class="login-center">
                <div class="login-centerInfo">
                    <p class="msg1">Nuevo Usuario</p>
                    <form action="agregar.php" method="post">
                        <div class="input-login">
                            <label for="Rut">Rut</label>
                            <input type="text" name="Rut">
                        </div>
                        <div class="input-login">
                            <label for="Nombres">Nombres</label>
                            <input type="text" name="Nombres">
                        </div>
                        <div class="input-login">
                            <label for="Apellido_P">Apellido Paterno</label>
                            <input type="text" name="Apellido_P">
                        </div>
                        <div class="input-login">
                            <label for="Apellido_M">Apellido Materno</label>
                            <input type="text" name="Apellido_M">
                        </div>
                        <div class="input-login">
                            <label for="Direccion">Direccion</label>
                            <input type="text" name="Direccion">
                        </div>
                        <div class="input-login">
                            <label for="Telefono">Telefono</label>
                            <input type="number" name="Telefono">
                        </div>
                        <div class="input-login">
                            <label for="Clave">Contraseña</label>
                            <input type="password" name="Clave">
                        </div>
                        <div class="input-button">
                            <button type="submit" class="input-button-boton">Agregar</button>
                        </div>
                    </form>
                    <div class="login-center-registrar">
                        <ul>
                            <li><a href="crud.php">Volver</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

