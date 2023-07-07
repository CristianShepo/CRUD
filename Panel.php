<?php
//Iniciamos la session
session_start();

// Validar el inicio de sesión
if (!isset($_SESSION['rut'])) {
    // Redirigir al formulario de inicio de sesión si no hay sesión activa
    header('Location: index.php');
    exit();
}
// Cerrar sesión cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_destroy(); // Destruir la sesión actual
    header('Location: index.php'); // Redirigir al formulario de inicio de sesión
    exit();
}
?>
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
            <div class="user">
                <div class="bienvenida">
                    <h3><img src="IMG/user.png" alt="user"> <?php 
                    require ("Class/Conexion.php"); 
                    $conectar= new Conexion(); 
                    $conectar->NombreCompleto();?>
                    <!-- Creamos un boton para cerrar la sesión -->
                    <form action="" method="post">
                        <div class="input-button">
                            <button type="submit" class="input-button-boton">Cerrar sesión</button>
                        </div>
                    </form>
                    </h3>
                </div>
            </div>
            <div class="user-info">
                <div class="user-info-bienvenida">
                    <h3>¡Bienvenido a QPromotor!</h3>
                    <h4>Perfil Administrador</h4>
                    <p>Interfaz de visualizacion de Usuarios creados.
                        <form method="post" action="crud.php">
                            <button type="submit">C.R.U.D.</button>
                        </form>
                    </p> 
                    <br>
                </div>
                <div class="tablaUser">
                    <h3>Tabla de Usuarios</h3>
                    <div class="tabla">
                        <?php
                        require_once "Class/Conexion.php";
                        $conexion = new Conexion();
                        $conexion->Conecta();

                        $resultado = $conexion->Ejecuta("SELECT * FROM Usuario");

                        if ($resultado->num_rows > 0) {
                            echo "<table>";
                            echo "<tr><th>Rut</th><th>Nombres</th><th>Apellid Paterno</th><th>Apellido Materno</th><th>Dirección</th><th>Teléfono</th><th>Clave</th></tr>";
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
                    <h3>Tabla de Perfiles</h3>
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
                            }
                            echo "</table>";
                        } else {
                            echo "No se encontraron registros en la tabla Usuario.";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>