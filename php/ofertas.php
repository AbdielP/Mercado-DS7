<?php
    $codigo = $_GET['codigo'];
    require_once("./classes/oferta.php");
    $obj_ofertas = new oferta();
    $ofertas = $obj_ofertas->get_ofertas_codigo($codigo);
    foreach ($ofertas as $key => $oferta) {

        print   "<div class='card flex-md-row mb-4 box-shadow h-md-250 border-light'>";
        print     "<div class='card-body d-flex flex-column align-items-start'>";
        print       "<strong class='d-inline-block mb-2 text-primary text-uppercase'>".$oferta['codpr']."</strong>";
        print       "<h3 class='mb-0'>";
        print         "<h4 class='text-dark'>".$oferta['prod']."</h4>";
        print       "</h3>";
        print       "<div class='mb-1 text-muted'>#CREATED AT AQUÍ#</div>";
        print      " <p class='card-text mb-auto pb-2'>".$oferta['info']."</p>";
        print       "<h6 class='card-subtitle mt-1 text-success'>".$oferta['precio']."$ (USD) Precio por libra.</h6>";
        print     "</div>";
        // print     "<img class='card-img-right flex-auto d-none d-md-block' src='./assets/img/logo.png' height='100' alt='Card image cap'>";

        print     "<div class='card-body d-flex flex-column align-items-start card-productor'>";
        print       "<strong class='d-inline-block mb-2 text-muted'>Información del productor</strong>";
        print       "<div class='mb-1 text-muted'>Nombre: </div>";
        print       "<p class='card-text mb-auto text-capitalize'>".$oferta['nombre']. $oferta['apellido']."</p>";
        print       "<a href=".$oferta['idprtor']." class='card-link'>Ver información de productor</a>";
        print     "</div>";
        print    "</div>";
        print   "</div>";
    }
?>