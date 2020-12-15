<?php
    require_once("./classes/oferta.php");

    function oferta_max_reciente() {
        $obj_oferta_max = new oferta();
        $oferta_max = $obj_oferta_max->get_oferta_max();
        return $oferta_max;
    }

    function oferta_max_precio() {
        $obj_oferta_max_precio = new oferta();
        $oferta_max_precio = $obj_oferta_max_precio->get_oferta_precio_max();
        return $oferta_max_precio;
    }

    function oferta_min_precio() {
        $obj_oferta_min_precio = new oferta();
        $oferta_min_precio = $obj_oferta_min_precio->get_oferta_precio_min();
        return $oferta_min_precio;
    }
?>