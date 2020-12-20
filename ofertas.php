<?php
    session_start();
?>
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
      <a class="navbar-brand" href="index.php">
        <p class="text-secondary p-0 m-0"><i class="fas fa-sign h3 text-success"></i> Ofertas Online</p>
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

  <main role="main" class="container"> 
    <div class="row mt-5 mb-5">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Ofertas disponibles</h5>
            <div class="row d-flex align-items-center justify-content-center">
              <i class="fas fa-seedling h2 m-2 text-secondary"></i><i class="fas fa-carrot h2 m-2 text-secondary"></i><i class="fas fa-tractor h2 m-2 text-secondary"></i>
            </div>
            <div class="row">
              <div class="col-md-6 d-flex align-items-center justify-content-center">
                <h6 class='card-subtitle'>Producto: </h6>
              </div>
              <div class="col-md-6 d-flex align-items-center justify-content-center">
                <?php
                  $codigo = $_GET['codigo'];
                  print "<h6 class='text-uppercase'>".$codigo."</h6>";
                ?>
              </div>
            </div>
            <p class="card-text text-center small">Listado de ofertas disponibles para este producto.</p>
            <p class="card-text text-info"><i class="fas fa-exclamation-circle text-warning"></i> Las ofertas contienen información del producto y del productor.</p>
            <hr>
            <div class='mb-1 text-muted'>Opciones: </div>
            <?php
              if (isset($_SESSION["usuario_valido"])) { 
                print "<a href='nuevaoferta.php' class='btn btn-success btn-sm btn-block mt-2'>Crear nueva oferta</a>";
              } else {
                print "<p align='center' class='m-0'>[ <a href='login.php' TARGET='_top'>Inicie sesión para crear una oferta</a> ]</p>";
        
              }
            ?>
           
            <hr>
            <a href="index.php" class="card-link"><i class="fas fa-arrow-circle-left"></i> Volver a listado de productos</a>
          </div>
        </div>
      </div>
      
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-12">
            <?php
              require_once("php/ofertas.php");
            ?>
          </div>
        </div>
        
      </div>
    </div>

  </main>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>