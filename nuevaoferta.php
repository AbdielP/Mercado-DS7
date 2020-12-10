<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva oferta - Mercado-DS8</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/nuevaoferta.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="col-md-10">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" width="50" height="50" alt=""> Ofertas Online
            </a>
        </div>
        <div class="col-md-2">
        <?php
        if (isset($_SESSION["usuario_valido"])) { 
            print "<p align='center' class='m-0'>Bienvenido ".$_SESSION["usuario_valido"]."</p>";
        } else {
            print "<p align='center' class='m-0'>Sesión no iniciada</p>";
            print "<p align='center' class='m-0'>[ <a href='login.php' TARGET='_top'>Iniciar sesión</a> ]</p>";
        }
        ?>
    </div>
  </nav>

  <div class="container mt-5 mb-5 p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <h2><i class="fas fa-toolbox"></i> Módulo de administración y cración de ofertas.</h2>
            </div>
            <hr>
        </div>
    </div>
  </div>

</body>
</html>