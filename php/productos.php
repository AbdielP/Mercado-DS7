<?php
    require_once("classes/producto.php");

    $obj_producto = new producto();
    $productos = $obj_producto->get_productos();
    foreach ($productos as $key => $producto) {
        // echo $producto['idpr'];
        print "<div class='col-md-3'>";
        print     "<div class='card bg-light mb-4'>";
        print         "<img class='card-img-top p-2' src='".$producto['img']."' height='125'  alt='Card image cap'>";
        print         "<div class='card-body'>";
        print             "<p class='card-text text-center text-capitalize'>".$producto['prod']."</p>";
        print         "</div>";
        print     "</div>";
        print "</div>";
    }
?>