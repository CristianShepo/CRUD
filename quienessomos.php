<?php
//Iniciamos la session
session_start();

// Validar el inicio de sesión
if (!isset($_SESSION['rut'])) {
    // Redirigir al formulario de inicio de sesión si no hay sesión activa
    header('Location: index.php');
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
    <title>Quienes Somos</title>
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
                <div class="user-info-bienvenida">
                    <h3>Quiénes somos</h3>
                    <img src="IMG/logoST.png" alt="logoST">
                    <p>Somos QPromotor, una empresa experta en desarrollo web</p>

                    <h4>Siempre Queremos</h4>

                    <p>En QPromotor, es nuestra prioridad crear lo que tu mente imagina y complacerte con la alta capacidad de desarrollo.</p>

                    <h4>Tenemos Experiencia</h4>

                    <p>Hemos resuelto los problemas de diseño web por años a grandes empresas, nuestros clientes nos avalan desde nuestra fundación en el año 2000.</p>

                    <h4>Respiramos Calidad</h4>

                    <p>Nuestra calidad va por sobre nuestros competidores, siempre hacemos mas y mas, hasta que el cliente quede asombrado.</p>

                    <h4>Como Trabajamos</h4>

                    <p>Nuestra forma de trabajar va desde un pedido de diseño, implementación, mantención, consultoria, podemos trabajar desde tus oficinas.</p>

                    <h4>El Equipo</h4>

                    <p>Nuestro equipo esta formado con profesionales de alto conocimiento, que disfrutan lo que hacen y ponen el amor en el proyecto que sea, independiente del tamaño.</p>

                    <h4>Como nos contactas?</h4>

                    <p>Si quieres a los mejores en programación WEB, contactanos al telefono 555666777 o al correo Contacto@qpromotor.cl</p>

                    <br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
