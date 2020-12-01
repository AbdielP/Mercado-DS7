<?php
    require_once("classes/producto.php");

    $obj_producto = new producto();
    $productos = $obj_producto->get_productos();
    foreach ($productos as $key => $producto) {
        echo $producto['idpr'];
        // Construir aquí el HTML a mostrar por cada producto disponible
    }
?>