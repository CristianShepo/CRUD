<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IMG/logo.png">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Eliminar</title>
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
                    <p class="msg1">Eliminar Usuario</p>
                    <form action="eliminarUser.php" method="post">
                        <div class="input-login">
                            <label for="Rut">Rut</label>
                            <input type="text" name="Rut">
                        </div>
                        <div class="input-button">
                            <button type="submit" class="input-button-boton">Eliminar</button>
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