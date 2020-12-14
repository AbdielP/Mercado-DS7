<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar información de oferta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/actualizando.css">
</head>
<body>
    <div class="container pt-5">
        <div class="row d-flex flex-column">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $idofert = $_POST['idofert'];
                $precio = $_POST['precio'];
                $idprod = $_POST['categoria'];
                $qty = $_POST['cantidad'];
                $unt = $_POST['unidadpeso'];
                $descripcion = $_POST['desc'];
                require_once("../classes/oferta.php");

                $obj_oferta_actualizada = new oferta();
                $oferta_actualizada = $obj_oferta_actualizada->update_oferta((int)$idofert,$idprod,$precio,$qty,$unt,$descripcion);

                if ($oferta_actualizada = true) {
                    print "<h1 class='text-info'>¡Oferta Actualizada! <i class='far fa-thumbs-up'></i></h1>";
                } else {
                    print "<h1 class='text-danger'>Oops.. <i class='fas fa-times-circle'></i></h1>";
                    print "<p class='text-info'>Algo ha salido mal, contacte con el administrador del sitio para reportar un problema.</p>";
                }
            }
        ?>
        </div>
        <hr>
        <div class="row">
            <a href='misofertas.php' class="text-secondary mr-5"><i class="far fa-arrow-alt-circle-left"></i> Regresar a mis ofertas publicadas</a>
            <a href='../index.php' class='text-success'>Ir a Home <i class="far fa-arrow-alt-circle-right"></i></a>
        </div>
    </div>
   
    <footer class="footer">
      <div class="container">
        <span class="text-muted">&copy; 2020 - Proyecto final Desarrollo de Software 7.</span>
      </div>
    </footer>
</body>
</html>