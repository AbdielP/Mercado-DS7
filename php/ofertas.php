<?php
    $codigo = $_GET['codigo'];
    require_once("./classes/oferta.php");
    $obj_ofertas = new oferta();
    $ofertas = $obj_ofertas->get_ofertas_codigo($codigo);
    foreach ($ofertas as $key => $oferta) {
        // print "<div class='card'>";
        // print     "<div class='card-body'>";
        // print         "<h5 class='card-title text-capitalize'>".$oferta['prod']."</h5>";
        // print         "<p class='card-text'>".$oferta['info']."</p>";
        // print         "<p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>";
        // print     "</div>";
        // print "</div>";

        print "<div class='card flex-md-row mb-4 box-shadow h-md-250 border-success'>";
        print     "<div class='card-body d-flex flex-column align-items-start'>";
        print       "<strong class='d-inline-block mb-2 text-primary text-uppercase'>".$oferta['codpr']."</strong>";
        print       "<h3 class='mb-0'>";
        print         "<h4 class='text-dark'>".$oferta['prod']."</h4>";
        print       "</h3>";
        print       "<div class='mb-1 text-muted'>Nov 12</div>";
        print      " <p class='card-text mb-auto pb-2'>".$oferta['info']."</p>";
        print       "<h6 class='card-subtitle mb-2 text-info'>".$oferta['precio']."$ (USD) Precio por libra.</h6>";
        print     "</div>";
        // print     "<img class='card-img-right flex-auto d-none d-md-block' src='./assets/img/logo.png' height='100' alt='Card image cap'>";

        print     "<div class='card-body d-flex flex-column align-items-start card-productor'>";
        print       "<strong class='d-inline-block mb-2 text-muted'>Información del productor</strong>";
        print       "<h3 class='mb-0'>";
        print         "<h4 class='text-dark'>".$oferta['prod']."</h4>";
        print       "</h3>";
        print       "<div class='mb-1 text-muted'>Nov 12</div>";
        print      " <p class='card-text mb-auto pb-2'>".$oferta['info']."</p>";
        print       "<h6 class='card-subtitle mb-2 text-info'>".$oferta['precio']."$ (USD) Precio por libra.</h6>";
        print     "</div>";
        print     "</div>";
        print "</div>";
    }
?>