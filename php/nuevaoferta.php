<?php
    $idprod = $_POST['categoria'];
    $idprtor = $_POST['idproductor'];
    $precio = $_POST['precio'];
    $qty = $_POST['cantidad'];
    $unt = $_POST['unidadpeso'];
    $descripcion = $_POST['desc'];
    
    require_once("./classes/oferta.php");
    $obj_insert_oferta = new oferta();
    $insert_oferta = $obj_insert_oferta->insert_oferta($idprod, $idprtor, $precio, $qty, $unt, $descripcion);
    echo $insert_oferta;
    return;
?>