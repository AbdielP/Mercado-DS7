<?php
    $codigo = $_GET['codigo'];
    require_once("./classes/oferta.php");
    $obj_ofertas = new oferta();
    $ofertas = $obj_ofertas->get_ofertas_codigo($codigo);
    foreach ($ofertas as $key => $oferta) {
?>
    <div class='card flex-md-row mb-1 box-shadow h-md-250 border-light opaco'>
    <?php
        print "<img class='card-img-left mt-4 d-none d-md-block' src='./assets/img/".$oferta['codpr'].".png' height='100' alt='Card image cap'>";
    ?>
    <div class='card-body d-flex flex-column align-items-start'>
        <?php
        print "<strong class='d-inline-block mb-2 text-primary text-uppercase'>".$oferta['codpr']."</strong>";
        ?>
        <h3 class='mb-0'>
        <?php
        print "<h4 class='text-dark'>".$oferta['prod']."</h4>";
        ?>
        </h3>
        <?php
        print "<div class='mb-1 text-muted'>Fecha publicación: ".$oferta['createdAt']."</div>";
        print "<p class='card-text mb-auto pb-2'>".$oferta['info']."</p>";
        print "<h6 class='card-subtitle mt-1 text-success'>".$oferta['precio']."$ (USD) Precio por libra.</h6>";
        ?>
        </div>
        <div class='card-body card-productor'>
            <h4 class='d-flex justify-content-between align-items-center mb-3'>
            <span class='text-muted'>Precio</span>
            <?php
            print "<span class='badge badge-primary badge-pill'>$".$oferta['precio']."</span>";
            ?>
            </h4>
            <ul class='list-group mb-3'>
                <li class='list-group-item d-flex justify-content-between lh-condensed'>
                <div>
                <?php
                    print "<h6 class='my-0 text-info text-capitalize'>".$oferta['nombre']." ".$oferta['apellido']."</h6>";
                    print "<small class='text-muted'>".$oferta['corel']."</small>";
                ?>
                </div>
                <?php
                print "<span class='text-primary h6'>$".$oferta['precio']."</span>";
                ?>
                </li>
            </ul>
            <div class='d-flex justify-content-around'>
                <button type='button' class='btn btn-primary btn-sm'><i class='fas fa-shopping-basket'></i> Ver oferta</button>
                <button type='button' class='btn btn-success btn-sm'><i class='fas fa-id-card-alt'></i> Ver datos del productor</button>
            </div>
       
        </div>
    </div>
<?php
    }
?>