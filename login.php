<?php
    session_start();
    if (isset($_REQUEST['usrn']) && isset($_REQUEST['pswd'])) {
        $usrn = $_REQUEST['usrn'];
        $pswd = $_REQUEST['pswd'];

        // $salt = substr($usr, 0 ,2);
        // $pswcrpt = crypt($psw, $salt);

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
    <title>Distribución Online de Ofertas</title>
</head>
<body>
    <?php
        if (isset($_SESSION["usuario_valido"])) {
    ?>
        <h2>Administrador de ofertas.</h2>
        <hr>

        <ul>
            <li><a href="index.php">Home.</a></li>
        </ul>
        <hr>
        <p>[ <a href="logout.php">Desconectar</a> ]</p>
    <?php
        } else if (isset($usuario)) {
            print ("<br><br>\n");
            print ("<p align='center'>Acceso no autorizado</p>\n");
            print ("<p align='center'>[ <a href='login.php'>Conectar</a> ]</p>\n");
        } else {
            print ("<br><br>\n");
            print ("<p class='parrafocentrado'>Esta zona tiene el acceso restringido.<br> ". "Para entrar debe identificarse</p>\n");
            print ("<form class='entrada' name='login' ACTION='login.php' METHOD='POST'>\n");
                print ("<p><label class='etiqueta-entrada'>Usuario:</label>\n");
                print ("    <input type='text' name='usrn' size='15'></p>\n");
                print ("<p><label class='etiqueta-entrada'>Clave:</label>\n");
                print ("    <input type='password' name='pswd' size='15'></p>\n");
                print ("<p><input type='submit' value='entrar'></p>\n");
            print ("</form>\n");

            print ("<p class='parrafocentrado'>Nota: Si no dispone de identificación o tiene problemas". 
                    "para entrar<br>ponganse en contacto con el ".
                    "<a href='MAILTO:webmaster@correofake.com'></a> administrador del sitio</p>\n");
            print "<a href='index.php'>Volver a home</a>";
        }
    ?>
</body>
</html>