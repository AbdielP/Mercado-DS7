<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribución Online de Ofertas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
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
          // print "<p align='center' class='m-0'>Bienvenido ".$_SESSION["usuario_valido"]."</p>";
          print "<ul class='navbar-nav'>";
          print     "<li class='nav-item dropdown'>";
          print         "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
          print         "Bienvenido ".$_SESSION["usuario_valido"]."";
          print         "</a>";
          print         "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
          print         "<a class='dropdown-item' href='index.php'>Home</a>";
          print         "<a class='dropdown-item' href='ofertas/misofertas.php'>Mis ofertas</a>";
          print         "<a class='dropdown-item' href='logout.php'>Cerrar Sesión</a>";
          print         "</div>";
          print     "</li>";   
          print "</ul>";
        } else {
            print "<p align='center' class='m-0'>Sesión no iniciada</p>";
            print "<p align='center' class='m-0'>[ <a href='login.php' TARGET='_top'>Iniciar sesión</a> ]</p>";
        }
      ?>
      </div>
    </nav>

    <main role="main" class="container pb-4">
      <div class="row mt-5">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">¡Bienvenido!</h5>
              <h6 class="card-subtitle mb-2 text-muted">Mercado de ofertas Online</h6>
              <p class="card-text">Consulte o publique ofertas de productos en Ofertas Online. El mercado de ofertas al por mayor más éxitoso.</p>
              <hr>
              <!-- <a href="#" class="card-link">Card link</a> -->
              <?php
                if (isset($_SESSION["usuario_valido"])){
                  print "<a href='ofertas/misofertas.php' class='card-link h6'><i class='fas fa-cash-register'></i> Mis ofertas</a>";
                } else {
                  print "<p align='center' class='m-0'>[ <a href='login.php' TARGET='_top'>Iniciar sesión</a> ]</p>";
                }
              ?>  
            </div>
          </div>
        </div>

        <div class="col-md-9">
          <!-- Tarjeta de oferta más reciente  -->
          <div class="card flex-md-row">
            <div class="card-body">
              <h4 class="card-title text-secondary"><i class="far fa-handshake"></i> Ofertas Online</h4>
              <hr>
              <div class="row">
                <h6 class="card-subtitle mb-2 ml-3 text-info">Oferta más reciente</h6>
                <h6 class="card-subtitle mb-2 ml-3 text-secondary">Producto</h6>
              </div>
              <p class="card-text">
                Info de este producto. Descripción de esta oferta traida de la BD.
              </p>
              <button type="button" class="btn btn-sm btn-secondary">
                Cantidad <span class="badge badge-pill badge-light">100</span>
              </button>
              <button type="button" class="btn btn-sm btn-secondary">
                <span class="badge badge-pill badge-light">Lb</span>
              </button>
            </div>

            <div class="card-body"> <!-- INICIO DIV CARD-BODY -->

              <div class="order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="text-muted">Precio</span>
                  <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Product name</h6>
                      <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$12</span>
                  </li>
                  
                </ul>
              </div>

            </div> <!-- FINAL DIV CARD-BODY -->
          </div>

          <!-- Tarjeta de oferta más alta y más baja  -->
          <div class="card flex-md-row">
            <div class="card-body">
              <h4 class="card-title text-secondary"><i class="far fa-handshake"></i> Ofertas Online</h4>
              <hr>
              <div class="row">
                <h6 class="card-subtitle mb-2 ml-3 text-warning">Oferta más Alta</h6>
                <h6 class="card-subtitle mb-2 ml-3 text-secondary">Producto</h6>
              </div>
              <p class="card-text">
                Info de este producto. Descripción de esta oferta traida de la BD.
              </p>
              <button type="button" class="btn btn-sm btn-secondary">
                Cantidad <span class="badge badge-pill badge-light">100</span>
              </button>
              <button type="button" class="btn btn-sm btn-secondary">
                <span class="badge badge-pill badge-light">Lb</span>
              </button>
            </div>

            <div class="card-body">
              <h4 class="card-title text-secondary"><i class="far fa-handshake"></i> Ofertas Online</h4>
              <hr>
              <div class="row">
                <h6 class="card-subtitle mb-2 ml-3 text-success">Oferta más Baja</h6>
                <h6 class="card-subtitle mb-2 ml-3 text-secondary">Producto</h6>
              </div>
              <p class="card-text">
                Info de este producto. Descripción de esta oferta traida de la BD.
              </p>
              <button type="button" class="btn btn-sm btn-secondary">
                Cantidad <span class="badge badge-pill badge-light">100</span>
              </button>
              <button type="button" class="btn btn-sm btn-secondary">
                <span class="badge badge-pill badge-light">Lb</span>
              </button>
            </div>
          </div>
          
          <div class="row mt-3">
            <div class="col-md-12">
              <h6 class="text-muted"><b>Productos disponibles.</b></h6>
            </div>
          </div>
          
          <div class="row pl-3 pr-3">
            <!-- Tarjetas de selección de rubro/producto  -->
            <?php
              require_once("php/productos.php");
            ?>
        </div>
      </div>
    </main>
     <!-- ¿COMO SE HACE UN WEBSERVICE?  -->
    <!-- Algo así: https://www.infojobs.net/ofertas-trabajo/distribucion-online  -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" 
        integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</body>
</html>