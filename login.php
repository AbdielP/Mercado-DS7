<?php
    session_start();
    if (isset($_REQUEST['usrn']) && isset($_REQUEST['pswd'])) {
        $usrn = $_REQUEST['usrn'];
        $pswd = $_REQUEST['pswd'];

        require_once("classes/user.php");

        $obj_user = new usuario();
        $usuario_valido = $obj_user->validar_usuario($usrn, $pswd);
        foreach ($usuario_valido as $array_resp) {
            foreach ($array_resp as $value) {
                $nfilas=$value;
            }
        }

        if ($nfilas > 0) {
            $usuario_valido = $usrn;
            $_SESSION["usuario_valido"] = $usuario_valido;
        }
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Online de Ofertas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php
        if (isset($_SESSION["usuario_valido"])) {
    ?>
    <div class="container">
        <div class="row">
            <h3 class="display-4 text-secondary">
                Mercado de Ofertas Online <i class="fas fa-shopping-cart text-info"></i>
                <i class="fas fa-seedling text-success"></i>
                <i class="fas fa-carrot text-danger"></i>
            </h3>
        </div>
        <hr>
        <ul class="list-group col-md-4 bg-none">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="text-info h4" href="index.php">Home</a>
                <span class="badge badge-info p-1 h4"><i class='fas fa-home'></i></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="text-danger h4" href="logout.php">Desconectar</a>
                <span class="badge badge-danger p-1 h4"><i class="fas fa-sign-out-alt"></i></span>
            </li>
        </ul>
    </div>
       
    <?php
        } else if (isset($usuario)) {
            print ("<br><br>\n");
            print ("<p align='center'>Acceso no autorizado</p>\n");
            print ("<p align='center'>[ <a href='login.php'>Conectar</a> ]</p>\n");
        } else {
    ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex justify-content-end align-items-center">
                    <p class='text-secondary text-center'> <i class="fas fa-exclamation-circle text-warning"></i> Esta zona tiene el acceso restringido. Para entrar debe identificarse.</p>
                </div>
                <div class="col-md-5 d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-store text-success m-3 display-3"></i>
                    <form class='form-signin' name='login' ACTION='login.php' METHOD='POST'>
                        <input type="email" id="usrn" name="usrn" class="form-control" placeholder="Correo eléctronico" required autofocus>
                        <input type="password" name="pswd" id="pswd" class="form-control" placeholder="Contraseña" required>
                        
                        <button class="btn btn-sm btn-success btn-block mt-4" type="submit">Entrar</button>
                    </form>
                    <footer class="my-5  text-muted text-center text-small h6">
                         <p class="mb-1">&copy; 2020 - Proyecto final Desarrollo de software 7</p>
                            <ul class="list-inline">
                            <li class="list-inline-item"><a href="index.php">Home</a></li>
                        </ul>
                    </footer>
                </div>
                <div class="col-md-4 d-flex justify-content-start align-items-center">
                    <p class='text-secondary'>Nota: Si no dispone de identificación o tiene problemas para entrar
                    ponganse en contacto con el <a href='MAILTO:webmaster@correofake.com'>administrador del sitio</a>.</p>
                </div>
                
            </div>
        </div>
        


        <!-- <br><br>
        <p class='parrafocentrado'>Esta zona tiene el acceso restringido.<br> Para entrar debe identificarse</p>
        <form class='entrada' name='login' ACTION='login.php' METHOD='POST'>
            <p><label class='etiqueta-entrada'>Usuario:</label>
            <input type='text' name='usrn' size='15'></p>
            <p><label class='etiqueta-entrada'>Clave:</label>
            <input type='password' name='pswd' size='15'></p>
            <p><input type='submit' value='entrar'></p>
        </form>
        <p class='parrafocentrado'>Nota: Si no dispone de identificación o tiene problemas
            para entrar<br>ponganse en contacto con el
            <a href='MAILTO:webmaster@correofake.com'></a> administrador del sitio</p>
            <a href='index.php'>Volver a home</a> -->
     <?php
        }
    ?>
</body>
</html>