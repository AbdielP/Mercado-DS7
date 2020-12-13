<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar sesión</title>
</head>
<body>
    <?php
    if (isset($_SESSION["usuario_valido"])) {
        session_destroy();
        print ("<br><br><p align='center'>Sesión finalizada.</p>");
        print ("<p align='center'> [ <a href='index.php'>Volver a Home</a> ] </p>\n");
        print ("<p align='center'> [ <a href='login.php'>Iniciar sesión</a> ] </p>\n");
    } else {
        print ("<br><br>\n");
        print ("<p align='center'>No existe una sesión activa </p>\n");
        print ("<p align='center'> [ <a href='login.php'>Iniciar sesión</a> ] </p>\n");
    }
    ?>
</body>
</html>