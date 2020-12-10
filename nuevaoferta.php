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
                <h2><i class="fas fa-tags"></i> Administración y creación de ofertas.</h2>
            </div>
            <p>Formulario para creación de nuevas ofertas. Seleccione la categoría del producto a ofertar, coloque un precio, descripción de la oferta y unidad de peso (<b>Kg</b> o <b>Lb</b>) para vender.</p>
            <hr>
            <h4>Creación de ofertas. <i class="fas fa-shopping-basket"></i></h4>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="precio">Precio de la oferta (Dólares).</label> <br>
                        <input id="precio" name="precio" class="form-control form-control-sm" type="number" step="any" min="0.01" placeholder="Ejemplo: 0.80">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="categoria">Categoría de la oferta.</label> <br>
                        <select id="categoria" name="categoria" class="form-control form-control-sm">
                            <option selected>Listado de productos aquí...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="unidadpeso">Unidad de medida (peso).</label> <br>
                        <select id="unidadpeso" name="unidadpeso" class="form-control form-control-sm">
                            <option value="lb" selected>Libras (Lb)</option>
                            <option value="kg">Kilogramos (Kg)</option>
                        </select>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descripción de la oferta.</label> <br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="multiple" rows="2" placeholder="Ingrese aquí una leyenda o descripción de la oferta. máximo 255 caracteres." required></textarea>
                </div>
                <div class="col-md-12">
                    <small>La descripción es opcional. Puede utilizarla para brindar información útil al comprador sobre su producto.</small>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-block">Crear oferta <i class="far fa-paper-plane"></i></button>
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

</body>
</html>