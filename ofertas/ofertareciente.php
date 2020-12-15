<?php
    require_once("./classes/oferta.php");
    $obj_oferta_max = new oferta();
    $oferta_max = $obj_oferta_max->get_oferta_max();
    return $oferta_max;
?>