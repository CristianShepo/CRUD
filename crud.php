<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/panel.css">
    <link rel="icon" href="IMG/pass.png">
    <title>Panel</title>
</head>
<body>
    <header>
        <div class="container">
            <p class="logo"><a href="Panel.php">QPromotor</a></p>
            <nav>
                <a href="quienessomos.php">Quienes Somos</a>
            </nav>
        </div>
    </header>
    <div class="main">
        <div class="main-conteiner-info">
            <div class="user-info">
                <div class="Botones">
                    <h3>Administración de Data Base</h3>
                    <nav class="Menus">
                        <li><form method="post" action="registrar.php"><button type="submit">Agregar Usuario</button></form></li>
                        <li><form method="post" action="eliminar.php"><button type="submit">Eliminar Usuario</button></form></li>
                    </nav>
                </div>
                <div class="tablaUser">
                    <h3>Tabla User</h3>
                    <div class="tabla">
                        <?php
                        require_once "Class/Conexion.php";
                        $conexion = new Conexion();
                        $conexion->Conecta();

                        $resultado = $conexion->Ejecuta("SELECT * FROM usuario");

                        if ($resultado->num_rows > 0) {
                            echo "<table>";
                            echo "<tr><th>Rut</th><th>Nombres</th><th>Apellido_P</th><th>Apellido_M</th><th>Direccion</th><th>Telefono</th><th>Clave</th></tr>";
                            while ($fila = $resultado->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $fila['Rut'] . "</td>";
                                echo "<td>" . $fila['Nombres'] . "</td>";
                                echo "<td>" . $fila['Apellido_P'] . "</td>";
                                echo "<td>" . $fila['Apellido_M'] . "</td>";
                                echo "<td>" . $fila['Direccion'] . "</td>";
                                echo "<td>" . $fila['Telefono'] . "</td>";
                                echo "<td>" . $fila['Clave'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "No se encontraron registros en la tabla Usuario.";
                        }
                        ?>
                    </div>
                    <br>
                    <div class="Botones">
                        <nav class="Menus">
                            <li><form method="post" action="buscar.php"><button type="submit">Actualizar Usuario</button></form></li>
                        </nav>
                    </div>
                    <h3>Tabla Perfil</h3>
                    <div class="tabla">
                        <?php
                        require_once "Class/Conexion.php";
                        $conexion = new Conexion();
                        $conexion->Conecta();

                        $resultado = $conexion->Ejecuta("SELECT * FROM perfil");

                        if ($resultado->num_rows > 0) {
                            echo "<table>";
                            echo "<tr><th>Código</th><th>TipoUser</th></tr>";
                            while ($fila = $resultado->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $fila['Codigo'] . "</td>";
                                echo "<td>" . $fila['Tipo_perfil'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "No se encontraron registros en la tabla Usuario.";
                        }
                        ?>
                    </div>
                    <br>
                    <div class="Botones">
                        <nav class="Menus">
                            <li><form method="post" action="buscar2.php"><button type="submit">Actualizar Perfil</button></form></li>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
