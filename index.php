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
          <div class="card mb-3">
            <div class="card-body">
              <h4 class="card-title text-center">¡Bienvenido!</h4>
              <h6 class="card-subtitle mb-2 text-muted text-center">Mercado de ofertas Online</h6>
              <p class="card-text text-justify">Consulte o publique ofertas de sus productos en este mercado online.</p>
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
                <!-- TARJETAS  -->
          <div class="p-2 mb-1">
            <div class="order-md-2">
              <h6 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted"><i class="fas fa-flag"></i> Ofertas Totales </span>
                <?php
                  require_once("php/estadisticas.php");
                  foreach (estadisticas() as $key => $estadistica) {
                    print "<span class='badge badge-primary badge-pill'>".$estadistica['total_ofertas']."</span>";
                  }
                ?> 
              </h6>
              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class='my-0 text-info text-capitalize'>Total de ofertas: </h6>
                    <small class='text-muted'>Ofertas públicadas de todos los productos.</small>
                  </div>
                  <?php
                    require_once("php/estadisticas.php");
                    foreach (estadisticas() as $key => $estadistica) {
                      print "<span class='text-primary h6'>".$estadistica['total_ofertas']."</span>";
                    }
                  ?> 
                </li>
              </ul>
              <!-- ESTADISTICAS  -->
              <div class='col-md-12'>
                <h6 class="mb-2 d-flex d-flex justify-content-between">Estadisticas Cebolla Nacional <i class="fas fa-chart-bar"></i></h6>
                <div class='d-flex justify-content-between align-items-center mb-1'>
                <?php
                  require_once("php/estadisticas.php");
                  foreach (estadisticas() as $key => $estadistica) {
                    print "<span class='badge badge-info badge-pill font-size-badge'>$".$estadistica['promedio_cebolla']."</span>";
                  }
                ?>
                  <small class='text-muted'>Media de precio/precio promedio</small>
                </div>  
                <div class='d-flex justify-content-between align-items-center mb-1'>
                <?php
                  require_once("php/estadisticas.php");
                  foreach (estadisticas() as $key => $estadistica) {
                    print "<span class='badge badge-success badge-pill font-size-badge'>$".$estadistica['min_cebolla']."</span>";
                  }
                ?>
                  <small class='text-muted'>Precio más bajo</small>
                </div>
                <div class='d-flex justify-content-between align-items-center mb-1'>
                <?php
                  require_once("php/estadisticas.php");
                  foreach (estadisticas() as $key => $estadistica) {
                    print "<span class='badge badge-warning badge-pill font-size-badge'>$".$estadistica['max_cebolla']."</span>";
                  }
                ?>
                  <small class='text-muted'>Precio más alto</small>
                </div> 
                <hr> 
              </div>

              <div class='col-md-12'>
                <h6 class="mb-2 d-flex justify-content-between">Estadisticas Papa Nacional <i class="fas fa-chart-bar"></i></h6>
                <div class='d-flex justify-content-between align-items-center mb-1'>
                <?php
                  require_once("php/estadisticas.php");
                  foreach (estadisticas() as $key => $estadistica) {
                    print "<span class='badge badge-info badge-pill font-size-badge'>$".$estadistica['promedio_papa']."</span>";
                  }
                ?>
                  <small class='text-muted'>Media de precio/precio promedio</small>
                </div>  
                <div class='d-flex justify-content-between align-items-center mb-1'>
                <?php
                  require_once("php/estadisticas.php");
                  foreach (estadisticas() as $key => $estadistica) {
                    print "<span class='badge badge-success badge-pill font-size-badge'>$".$estadistica['min_papa']."</span>";
                  }
                ?>
                  <small class='text-muted'>Precio más bajo</small>
                </div>
                <div class='d-flex justify-content-between align-items-center mb-1'>
                <?php
                  require_once("php/estadisticas.php");
                  foreach (estadisticas() as $key => $estadistica) {
                    print "<span class='badge badge-warning badge-pill font-size-badge'>$".$estadistica['max_papa']."</span>";
                  }
                ?>
                  <small class='text-muted'>Precio más alto</small>
                </div> 
                <hr> 
              </div>

              <div class='col-md-12'>
                <h6 class="mb-2 d-flex justify-content-between">Estadisticas Tomate Nacional <i class="fas fa-chart-bar"></i></h6>
                <div class='d-flex justify-content-between align-items-center mb-1'>
                <?php
                  require_once("php/estadisticas.php");
                  foreach (estadisticas() as $key => $estadistica) {
                    print "<span class='badge badge-info badge-pill font-size-badge'>$".$estadistica['promedio_tomate']."</span>";
                  }
                ?>
                  <small class='text-muted'>Media de precio/precio promedio</small>
                </div>  
                <div class='d-flex justify-content-between align-items-center mb-1'>
                <?php
                  require_once("php/estadisticas.php");
                  foreach (estadisticas() as $key => $estadistica) {
                    print "<span class='badge badge-success badge-pill font-size-badge'>$".$estadistica['min_tomate']."</span>";
                  }
                ?>
                  <small class='text-muted'>Precio más bajo</small>
                </div>
                <div class='d-flex justify-content-between align-items-center mb-1'>
                <?php
                  require_once("php/estadisticas.php");
                  foreach (estadisticas() as $key => $estadistica) {
                    print "<span class='badge badge-warning badge-pill font-size-badge'>$".$estadistica['max_tomate']."</span>";
                  }
                ?>
                  <small class='text-muted'>Precio más alto</small>
                </div> 
                <hr> 
              </div>

              <div class='col-md-12'>
                <h6 class="mb-2 d-flex justify-content-between">Estadisticas Repollo <i class="fas fa-chart-bar"></i></h6>
                <div class='d-flex justify-content-between align-items-center mb-1'>
                <?php
                  require_once("php/estadisticas.php");
                  foreach (estadisticas() as $key => $estadistica) {
                    print "<span class='badge badge-info badge-pill font-size-badge'>$".$estadistica['promedio_repollo']."</span>";
                  }
                ?>
                  <small class='text-muted'>Media de precio/precio promedio</small>
                </div>  
                <div class='d-flex justify-content-between align-items-center mb-1'>
                <?php
                  require_once("php/estadisticas.php");
                  foreach (estadisticas() as $key => $estadistica) {
                    print "<span class='badge badge-success badge-pill font-size-badge'>$".$estadistica['min_repollo']."</span>";
                  }
                ?>
                  <small class='text-muted'>Precio más bajo</small>
                </div>
                <div class='d-flex justify-content-between align-items-center mb-1'>
                <?php
                  require_once("php/estadisticas.php");
                  foreach (estadisticas() as $key => $estadistica) {
                    print "<span class='badge badge-warning badge-pill font-size-badge'>$".$estadistica['max_repollo']."</span>";
                  }
                ?>
                  <small class='text-muted'>Precio más alto</small>
                </div> 
                <hr> 
              </div>
              <!-- FIN ESTADSTICAS  -->

            </div>
          </div>
        </div>

        <div class="col-md-9">
          <!-- Tarjeta de oferta más reciente  -->
          <div class="card flex-md-row">
            <div class="card-body col-md-7 pb-0 mb-0">
              <h4 class="card-title text-secondary"><i class="far fa-clock"></i> Oferta más reciente</h4>
              <hr>
              <div class="row">
                <h6 class="card-subtitle mb-2 ml-3 text-secondary">Producto:</h6>
                <?php
                  require_once("ofertas/estadisticasofertas.php");
                  foreach (oferta_max_reciente() as $key => $max) {
                    print "<h6 class='card-subtitle mb-2 ml-3 text-info'>".$max['prod']."</h6>";
                  }
                ?>
              </div>
              <?php
                  require_once("ofertas/estadisticasofertas.php");
                  foreach (oferta_max_reciente() as $key => $max) {
                    print "<p class='card-text'>".$max['descripcion']."</p>";
                    print "<button type='button' class='btn btn-sm btn-light'>";
                    print  "Cantidad <span class='badge badge-info'>".$max['qty']."</span>";
                    print "</button>";
                    print "<button type='button' class='btn btn-sm btn-light'>";
                    print  "<span class='badge badge-info text-capitalize'>".$max['unt']."</span>";
                    print "</button>";
                  }
                ?>
            </div>

            <div class="card-body col-md-5 pb-0 mb-0"> <!-- INICIO DIV CARD-BODY -->

              <div class="order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="text-muted">Precio</span>
                  <?php
                   require_once("ofertas/estadisticasofertas.php");
                   foreach (oferta_max_reciente() as $key => $max) {
                      print "<span class='badge badge-primary badge-pill'>".$max['precio']." USD</span>";
                    }
                  ?>
                </h4>
                <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <?php
                    require_once("ofertas/estadisticasofertas.php");
                    foreach (oferta_max_reciente() as $key => $max) {
                      print "<div>";
                      print   "<h6 class='my-0 text-info text-capitalize'>".$max['nmb']." ".$max['apll']."</h6>";
                      print   "<small class='text-muted'>".$max['corel']."</small>";
                      print "</div>";
                      print "<span class='text-primary h6'>$".$max['precio']."</span>";
                    }
                  ?>
                  </li>
                </ul>
                <?php
                 require_once("ofertas/estadisticasofertas.php");
                 foreach (oferta_max_reciente() as $key => $max) {
                    print "<p class='card-text'>".$max['info']."</p>";
                  }
                ?>
              </div>

            </div> <!-- FINAL DIV CARD-BODY -->
          </div>
                      
          <!-- Tarjeta de oferta más alta y más baja  -->
          <div class="card flex-md-row opaco">
            <div class="card-body opaco">

              <div class="row">
                  <div class="col-md-7">
                    <h5 class="card-title text-secondary"><i class="fas fa-arrow-up"></i> Oferta más alta</h5>
                  </div>
                  <div class="col-md-5">
                    <h5 class="d-flex justify-content-between align-items-center mb-3">
                      <span class="text-muted">Precio</span>
                      <?php
                        require_once("ofertas/estadisticasofertas.php");
                        foreach (oferta_max_precio() as $key => $max_precio) {
                          print "<span class='badge badge-warning badge-pill'>$".$max_precio['precio']."</span>";
                        }
                      ?>
                    </h5>
                  </div>
              </div>

              <hr class="pt-0 mt-0">
              <div class="row">
                <h6 class="card-subtitle mb-2 ml-3 text-secondary">Producto:</h6>
                <?php
                  require_once("ofertas/estadisticasofertas.php");
                  foreach (oferta_max_precio() as $key => $max_precio) {
                    print "<h6 class='card-subtitle mb-2 ml-3 text-warning'>".$max_precio['prod']."</h6>";
                  }
                ?>
              </div>
              <?php
                require_once("ofertas/estadisticasofertas.php");
                foreach (oferta_max_precio() as $key => $max_precio) {
                  print "<p class='card-text'>".$max_precio['descripcion']."</p>";
                  print "<button type='button' class='btn btn-sm btn-light'>";
                  print "  Cantidad <span class='badge badge-warning'>".$max_precio['qty']."</span>";
                  print "</button>";
                  print "<button type='button' class='btn btn-sm btn-light'>";
                  print "  <span class='badge badge-warning text-capitalize'>".$max_precio['unt']."</span>";
                  print "</button>";
                }
              ?>
            </div>

            <div class="card-body">

            <div class="row">
                  <div class="col-md-7">
                    <h5 class="card-title text-secondary"><i class="fas fa-arrow-down"></i> Oferta más baja</h5>
                  </div>
                  <div class="col-md-5">
                    <h5 class="d-flex justify-content-between align-items-center mb-3">
                      <span class="text-muted">Precio</span>
                      <?php
                        require_once("ofertas/estadisticasofertas.php");
                        foreach (oferta_min_precio() as $key => $min_precio) {
                          print "<span class='badge badge-success badge-pill'>$".$min_precio['precio']."</span>";
                        }
                      ?>
                    </h5>
                  </div>
              </div>

              <hr class="pt-0 mt-0">
              <div class="row">
                <h6 class="card-subtitle mb-2 ml-3 text-secondary">Producto:</h6>
                <?php
                  require_once("ofertas/estadisticasofertas.php");
                  foreach (oferta_min_precio() as $key => $min_precio) {
                    print "<h6 class='card-subtitle mb-2 ml-3 text-success'>".$min_precio['prod']."</h6>";
                  }
                ?>
              </div>
              <?php
                require_once("ofertas/estadisticasofertas.php");
                foreach (oferta_min_precio() as $key => $min_precio) {
                  print "<p class='card-text'>".$max_precio['descripcion']."</p>";
                  print "<button type='button' class='btn btn-sm btn-light'>";
                  print "  Cantidad <span class='badge badge-success'>".$max_precio['qty']."</span>";
                  print "</button>";
                  print "<button type='button' class='btn btn-sm btn-light'>";
                  print "  <span class='badge badge-success text-capitalize'>".$max_precio['unt']."</span>";
                  print "</button>";
                }
              ?>
            </div>
          </div>
          <hr>
          <div class="row mt-3">
            <div class="col-md-12">
              <p class="text-light text-center card-title bg-primary p-1"><b>Productos disponibles.</b></p>
            </div>
          </div>
          
          <div class="row pl-1 pr-1">
            <!-- Tarjetas de selección de rubro/producto  -->
            <?php
              require_once("php/productos.php");
            ?>
        </div>
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" 
        integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</body>
</html>