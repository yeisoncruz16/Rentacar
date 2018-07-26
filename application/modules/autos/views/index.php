<link rel="stylesheet" type="text/css" href="http://bonfire.com/themes/default/css/estilosVehiculos.css" media="screen" />

<?php include ('/var/www/html/Bonfire-master/application/views/commons/header.php');?>

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
            <?php if($login) {?>
                <a href="<?php echo site_url('reservas/') ?>" class="selectCar" >Reserva</a>
            <?php } else{?>
                <a href="<?php echo site_url('login/') ?>">Inicie sesion o registrese para acceder al formulario</a>
            <?php }?>
        </div>

    <?php endforeach; ?>

<?php else : ?>
    <div class="alert alert-info">
        No Posts were found.
    </div>
<?php endif; ?>