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
          print "<p align='center' class='m-0'>Bienvenido ".$_SESSION["usuario_valido"]."</p>";
        } else {
          print "<p align='center' class='m-0'>Sesión no iniciada</p>";
          print "<p align='center' class='m-0'>[ <a href='login.php' TARGET='_top'>Iniciar sesión</a> ]</p>";
        }
      ?>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="container mt-5 mb-5 p-5">
        <div class="col-md-12">
          <h1>Mercado DS-7 <i class="fas fa-feather-alt"></i></h1>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum ullam similique placeat vel perferendis architecto ducimus est voluptas obcaecati, 
            temporibus amet itaque, harum laudantium, omnis voluptatibus veniam doloremque dolore distinctio quod autem repudiandae quam!.</p>
        </div>
      </div>
      
    </main>
    <!-- Algo así: https://www.infojobs.net/ofertas-trabajo/distribucion-online  -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" 
        integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</body>
</html>