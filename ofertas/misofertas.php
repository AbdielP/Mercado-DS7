<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis ofertas vigentes.</title>
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
            print "<p align='center' class='m-0'>[ <a href='../login.php' TARGET='_top'>Iniciar sesión</a> ]</p>";
        }
        ?>
        </div>
    </nav>

    <div class="container mt-5 mb-5 p-5">
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="row">
                    <h5><i class="fas fa-tags text-info"></i> Mis ofertas publicadas.</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Fecha de publicación</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                    <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><a href="#">Editar</a></td>
                        <td><a href="#">Eliminar</a></td>
                    </tr>
            
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>