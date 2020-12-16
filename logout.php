<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php
    if (isset($_SESSION["usuario_valido"])) {
        session_destroy();
        print ("<br><br><p align='center'>Sesión finalizada.</p>");
        print ("<p align='center'> [ <a href='index.php'><i class='fas fa-home'></i> Volver a Home</a> ] </p>\n");
        print ("<p align='center'> [ <a href='login.php'><i class='fas fa-key'></i> Iniciar sesión</a> ] </p>\n");
    } else {
        print ("<br><br>\n");
        print ("<p align='center' class='text-muted'>No existe una sesión activa </p>\n");
        print ("<p align='center'> [ <a href='login.php'><i class='fas fa-key'></i> Iniciar sesión</a> ] </p>\n");
    }
    ?>
    
    <footer class="mt-5 text-muted text-center text-small">
        <p class="mb-1 h6">&copy; 2020 - Proyecto final Desarrollo de software 7</p> 
    </footer>
</body>
</html>