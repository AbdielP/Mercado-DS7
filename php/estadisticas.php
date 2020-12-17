<?php
    require_once("./classes/producto.php");

    function estadisticas() {
        $get_estadisticas = new producto();
        $estadisticas = $get_estadisticas->get_estadisticas();
        return $estadisticas;
    }
?>