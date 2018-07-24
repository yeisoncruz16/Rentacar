<link rel="stylesheet" type="text/css" href="http://bonfire.com/themes/default/css/estilosVehiculos.css" media="screen" />
<header>
    <div class="contenedor">
        <a href="<?php echo site_url('rent/') ?>" class="rent"> Rent a Car</a>
        <nav class="menus">
            <ul>
                <li> <a href="<?php echo site_url('rent/') ?>">Incio</a> </li>
                <li> <a href="<?php echo site_url('autos/') ?>">Vehículos</a> </li>
                <li> <a>Requisitos</a> </li>
                <li> <a>Iniciar sesion</a> </li>
            </ul>
        </nav>
    </div>
</header>

<?php if(isset($autos)) : ?>
    <?php foreach ($autos as $auto) : ?>

        <div class='carIntro'>
            <h3><?php echo ($auto->nombre)?></h3>
            <span>$99.180<small>/Día</small></span>
        </div>

        <div class="carAmenities">
            <div class="carSummary">
                <p>Placa: <?php echo ($auto->placa)?></p>
                <br><p>Color: <?php echo ($auto->color)?></p>
                <br><p>Modelo: <?php echo ($auto->modelo)?></p>
                <br><p>Capacidad: <?php echo ($auto->capacidad)?> personas</p>
            </div>
        </div>

        <div class="carItem">
            <div class="carPic">
            <img src="<?php echo base_url('upload/'.$auto->imagen.".jpg"); ?>"/>
            </div>
        </div>

        <div class="form-actions">
            <a href="<?php echo site_url('reservas/') ?>" class="selectCar" >Reserva</a>
        </div>

    <?php endforeach; ?>

<?php else : ?>
    <div class="alert alert-info">
        No Posts were found.
    </div>
<?php endif; ?>