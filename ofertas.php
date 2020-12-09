<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas Disponibles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/ofertas.css">
    <link rel="stylesheet" href="css/navbar.css">
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

  <main role="main" class="container"> 
    <div class="row mt-5 mb-5">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Ofertas disponibles</h5>
            <h6 class="card-subtitle mb-2 text-muted">Producto: #Servicio basado en el codigo#</h6>
            <p class="card-text">Listado de ofertas disponibles para el producto.</p>
            <!-- <p class="card-text">Las ofertas contienen información del producto y del productor.</p> -->
            <a href="index.php" class="card-link">Volver a listado de productos</a>
            <!-- <a href="#" class="card-link">Another link</a> -->
          </div>
        </div>
      </div> 

      <div class="card-group">
       <!-- TARJETAS OFERTAS  -->
        <?php
          require_once("php/ofertas.php");
        ?>
      </div>
    </div>
  </main>
</body>
</html>