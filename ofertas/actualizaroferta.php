<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar información de oferta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/misofertas.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="col-md-10">
            <a class="navbar-brand" href="#">
                <img src="../assets/img/logo.png" width="50" height="50" alt=""> Ofertas Online
            </a>
        </div>
        <div class="col-md-2">
        <?php
        if (isset($_SESSION["usuario_valido"])) { 
            print "<ul class='navbar-nav'>";
            print     "<li class='nav-item dropdown'>";
            print         "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
            print         "Bienvenido ".$_SESSION["usuario_valido"]."";
            print         "</a>";
            print         "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
            print         "<a class='dropdown-item' href='../index.php'>Home</a>";
            print         "<a class='dropdown-item' href='../ofertas/misofertas.php'>Mis ofertas</a>";
            print         "<a class='dropdown-item' href='../logout.php'>Cerrar Sesión</a>";
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
    <div class="container mt-5 mb-5 p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <h4><i class="fas fa-tags text-primary"></i> Actualizar oferta.</h4>
                </div>
                <hr>
                <form method="POST" action="actualizandooferta.php">
                    <div class="row">
                        <?php
                            require_once("../php/actualizaroferta.php");
                            foreach ($oferta as $key => $datos) {
                                print "<input id='idofert' value=".$datos['idofert']." name='idofert' type='hidden'>";
                            }
                        ?>
                        <div class="col-md-3 mb-3">
                            <label for="precio" class="text-primary">Precio de la oferta (Dólares).</label> <br>
                            <?php
                                require_once("../php/actualizaroferta.php");
                                foreach ($oferta as $key => $datos) {
                                    print "<input id='precio' value=".$datos['precio']." name='precio' class='form-control form-control-sm text-primary font-weight-bold' type='number' step='any' min='0.01' placeholder='Ejemplo: 0.80' required>";
                                }
                            ?>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="categoria">Categoría de la oferta.</label> <br>
                            <select id="categoria" name="categoria" class="form-control form-control-sm text-dark text-uppercase" required>
                            <?php
                                require_once("../php/actualizaroferta.php");
                                foreach ($oferta as $key => $datos) {
                                    print "<option class='text-info text-uppercase' value=".$datos['idprod']." selected>".$datos['prod']." - ".$datos['codpr']."</option>";
                                }
                            ?>
                            <?php
                                require_once("../classes/producto.php");             
                                $obj_producto = new producto();
                                $productos = $obj_producto->get_productos();
                                foreach ($productos as $key => $producto) {
                                    print "<option class='text-info text-uppercase' value='".$producto['idpr']."'>".$producto['prod']." - ".$producto['codpr']."</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="cantidad">Cantidad disponible.</label> <br>
                            <?php
                                require_once("../php/actualizaroferta.php");
                                foreach ($oferta as $key => $datos) {
                                    print "<input id='cantidad' value=".$datos['qty']." name='cantidad' class='form-control form-control-sm text-info' type='number' step='any' min='1' placeholder='Ejemplo: 50' required>";
                                }
                            ?>
                           
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="unidadpeso">Unidad de medida.</label> <br>
                            <select id="unidadpeso" name="unidadpeso" class="form-control form-control-sm" required>
                            <?php
                                require_once("../php/actualizaroferta.php");
                                foreach ($oferta as $key => $datos) {
                                    print "<option class='text-capitalize' value=".$datos['unt']." selected>".$datos['unt']."</option>";
                                }
                            ?>
                                <option value="lb">Libras (Lb)</option>
                                <option value="kg">Kilogramos (Kg)</option>
                                <option value="kg">Unidades (cu)</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="desc">Descripción de la oferta.</label> <br>
                        <?php
                            require_once("../php/actualizaroferta.php");
                            foreach ($oferta as $key => $datos) {
                                print "<textarea class='form-control' id='desc' name='desc' rows='2' placeholder='Ingrese aquí una leyenda o descripción de la oferta. máximo 255 caracteres.' required>".$datos['descripcion']."</textarea>";
                            }
                        ?>
                        
                    </div>
                    <div class="col-md-12">
                        <small class="text-info">La descripción es opcional. Puede utilizarla para brindar información útil al comprador sobre su producto.</small>
                    </div>
                    
                    <hr>
                    <button type="submit" class="btn btn-primary btn-block">Actualizar oferta <i class="fas fa-check"></i></button>
                    
                </form>
                
            </div>
            
        </div>
        <div class="row d-flex justify-content-around mt-5">
            <a href='misofertas.php' class='text-primary text-center'><i class="far fa-arrow-alt-circle-left"></i> Volver a mis ofertas</a>
            <a href="../index.php">Ir a Home <i class="far fa-arrow-alt-circle-right"></i></a> 
        </div>
    </div>
    <footer class="my-5  text-muted text-center text-small">
            <p class="mb-1">&copy; 2020 - Proyecto final Desarrollo de software 7</p>
        </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>