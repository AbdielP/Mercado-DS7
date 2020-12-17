<?php
    require_once("classes/producto.php");

    $obj_producto = new producto();
    $productos = $obj_producto->get_productos();
    foreach ($productos as $key => $producto) {
        print "<div class='col-md-6'>";
        print "        <div class='card-deck'>";
        print "            <div class='card ".$producto['codpr']."'>";
        print "                <img class='card-img-top img-producto' src='".$producto['img']."' alt='Producto'>";
        print "                <div class='card-body pb-2'>";
        print "                    <h4 class='card-title text-capitalize'>".$producto['prod']."</h4>";
        print "                    <p class='card-text'>".$producto['info']."</p>";
        print "                </div>";
        
        print                  "<ul class='list-group list-group-flush'>";
        print                       "<div class='card-body'>";
        print                       "    <a href='./ofertas.php?codigo=".$producto['codpr']."' class='btn btn-primary btn-sm btn-block'>Ver todas las ofertas</a>";
        print                       "</div>";
        print                  "</ul>";

        // print "                <div class='card-footer'>";
        // print "                    <small class='text-muted'>Last updated 3 mins ago</small>";
        // print "                </div>";
        print "            </div>";
        print "        </div>";
        print "</div>";
    }
?>