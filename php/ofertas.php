<?php
    require_once("classes/oferta.php");

    $obj_oferta = new oferta();
    $ofertas = $obj_oferta->get_ofertas();
    foreach ($ofertas as $key => $oferta) {
        // echo $oferta['precio'];
        print "<div class='col-md-6'>";
        print "        <div class='card-deck'>";
        print "            <div class='card'>";
        print "                <img class='card-img-top img-producto' src='".$oferta['img']."' alt='Producto'>";
        print "                <div class='card-body pb-2'>";
        print "                    <h4 class='card-title text-capitalize'>".$oferta['prod']."</h4>";
        print "                    <p class='card-text'>".$oferta['info']."</p>";
        print                      "<h6 class='card-subtitle mb-2 text-info'>".$oferta['precio']."$ (USD) Precio por libra.</h6>";
        print "                </div>";
        
        print                  "<ul class='list-group list-group-flush'>";
        print                       "<div class='card-body'>";
        // print                       "    <p class='card-text'>Código: <small class='text-uppercase'>".$oferta['codpr']."</small></p>";
        print                       "    <a href='#' class='btn btn-primary btn-lg btn-block'>Ver todas las ofertas</a>";
        print                       "</div>";
        print                  "</ul>";

        print "                <div class='card-footer'>";
        print "                    <small class='text-muted'>Last updated 3 mins ago</small>";
        print "                </div>";
        print "            </div>";
        print "        </div>";
        print "</div>";
    }
?>