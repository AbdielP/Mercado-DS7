<?php
    $idoferta = $_GET['oferta'];
     require_once("../classes/oferta.php");
     $obj_oferta = new oferta();
     $oferta = $obj_oferta->get_oferta($idoferta);
     return $oferta;
?>