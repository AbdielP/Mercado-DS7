<?php
    require_once("classes/oferta.php");

    $obj_oferta = new oferta();
    $ofertas = $obj_oferta->get_ofertas();
    foreach ($ofertas as $key => $oferta) {
        // echo $oferta['precio'];
        print "<div class='col-md-6'>";
        print   "<div class='card'>";
        print       "<div class='card-body'>";
        print          "<h4 class='card-title text-capitalize'>".$oferta['prod']."</h4>";
        print          "<h6 class='card-subtitle mb-2 text-info'>".$oferta['precio']."$ (USD) Precio por libra.</h6>";
        print          "<p class='card-text'>".$oferta['info']."</p>";
        print          "<a href='#' class='card-link text-uppercase'>Código: ".$oferta['codpr']."</a>";
        print          "<a href='#' class='card-link text-capitalize'>Producido por: ".$oferta['nombre']." ".$oferta['apellido']."</a>";
        print      "</div>";
        print   "</div>";
        print "</div>";
    }
?>