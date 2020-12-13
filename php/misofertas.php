<?php
    require_once("../classes/oferta.php");
    $usuario_valido = $_SESSION["usuario_valido"];
    $obj_ofertas = new oferta();
    $ofertas = $obj_ofertas->get_ofertas_usuario($usuario_valido);
    foreach ($ofertas as $key => $oferta) {
        $num=$key+1;
        print "<tr>";
        print   "<th scope='row'>".$num."</th>";
        print   "<td>".$oferta['prod']."</td>";
        print   "<td>".$oferta['precio']."</td>";
        print   "<td>".$oferta['qty']."</td>";
        print   "<td>".$oferta['unt']."</td>";
        print   "<td>".$oferta['createdAt']."</td>";
        print   "<td><a href='actualizaroferta.php?oferta=".$oferta['idofert']."' class='text-info'><i class='fas fa-wrench'></i> Editar</a></td>";
        print   "<td><a href='removeroferta.php?oferta=".$oferta['idofert']."' class='text-danger'><i class='fas fa-trash-alt'></i> Eliminar</a></td>";
        print "</tr>";
    }
?>