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

  <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<div class='alert alert-success text-center' role='alert'>";
            include_once("php/nuevaoferta.php");
        echo "</div>"; 
    }
  ?>
  <div class="container mt-5 mb-5 p-5 opaco">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <h2><i class="fas fa-tags text-success"></i> Administración y creación de ofertas.</h2>
            </div>
            <p>Formulario para creación de nuevas ofertas. Seleccione la categoría del producto a ofertar, coloque un precio, descripción de la oferta, unidad por peso (<b>Kg</b>, <b>Lb</b>) o unidades (<b>cu</b>) para vender.</p>
            <hr>
            <h4>Creación de ofertas. <i class="fas fa-shopping-basket"></i></h4>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="precio" class="text-success">Precio de la oferta (Dólares).</label> <br>
                        <input id="precio" name="precio" class="form-control form-control-sm text-success font-weight-bold" type="number" step="any" min="0.01" placeholder="Ejemplo: 0.80" required>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="categoria">Categoría de la oferta.</label> <br>
                        <select id="categoria" name="categoria" class="form-control form-control-sm text-info text-uppercase" required>
                            <option value="" disabled selected> - Escoger -</option>
                        <?php
                            require_once("classes/producto.php");                 
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
                        <input id="cantidad" name="cantidad" class="form-control form-control-sm text-info" type="number" step="any" min="1" placeholder="Ejemplo: 50" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="unidadpeso">Unidad de medida.</label> <br>
                        <select id="unidadpeso" name="unidadpeso" class="form-control form-control-sm" required>
                            <option value="" disabled selected> - Escoger -</option>
                            <option value="lb">Libras (Lb)</option>
                            <option value="kg">Kilogramos (Kg)</option>
                            <option value="kg">Unidades (cu)</option>
                        </select>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="desc">Descripción de la oferta.</label> <br>
                    <textarea class="form-control" id="desc" name="desc" rows="2" placeholder="Ingrese aquí una leyenda o descripción de la oferta. máximo 255 caracteres." required></textarea>
                </div>
                <div class="col-md-12">
                    <small class="text-info">La descripción es opcional. Puede utilizarla para brindar información útil al comprador sobre su producto.</small>
                </div>
                <hr>
                <h6 class="text-muted mb-2">Información de vendedor. <i class="fas fa-truck"></i></h6>

                <div class="row d-flex justify-content-center align-items-center">
                    <?php
                        require_once("classes/user.php");
                        $obj_user = new usuario();
                        $user = $obj_user->datos_usuario($_SESSION["usuario_valido"]);    
                        foreach ($user as $key => $datos) {
                            print "<div class='col-md-6 d-flex justify-content-center align-items-center'>";
                            print   "<label for='nombre' class='text-secondary m-0 mr-2'>Nombre:</label>";
                            print   "<input id='nombre' name='nombre' class='m-0 text-secondary remove-style font-weight-bold' type='text' value='".$datos['nmb'] ." ".$datos['apll']."' disabled>";
                            print "</div>";
                            print "<div class='col-md-6 d-flex justify-content-center align-items-center'>";
                            print   "<label for='correo' class='text-secondary m-0 mr-2'>Correo eléctronico:</label>";
                            print   "<input id='correo' name='correo' class='m-0 text-secondary remove-style font-weight-bold' type='text' value='".$datos['corel']."' disabled>";
                            print "</div>";
                            print "<input id='idproductor' name='idproductor' type='hidden' value='".$datos['id']."'>";

                        }   
                    ?>   
                </div>

                <hr>
                <button type="submit" class="btn btn-success btn-block">Crear oferta <i class="far fa-paper-plane"></i></button>
                
            </form>
            
        </div>
    </div>
    <footer class="my-5  text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 - Proyecto final Desarrollo de software 7</p>
            <ul class="list-inline">
            <li class="list-inline-item"><a href="index.php">Home</a></li>
        </ul>
    </footer>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>