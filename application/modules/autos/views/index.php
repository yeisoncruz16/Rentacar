<link rel="stylesheet" type="text/css" href="http://bonfire.com/themes/default/css/estilosVehiculos.css" media="screen" />
<?php if(isset($autos)) : ?>
    <?php foreach ($autos as $auto) : ?>

        <div class='carIntro'>
            <h2><?php echo ($auto->nombre)?></h2>
            <span>$99.180<small>/Día</small></span>
        </div>

        <div class='carItem'>
            <img src="<?php echo base_url('upload/'.$auto->imagen.".jpg"); ?>"/>
        </div>

        <div class="carAmenities">
            <div class='clear'></div>
            <div class='carSummary'>
                <p>Placa: <?php echo ($auto->placa)?></p>
                <br><p>Color: <?php echo ($auto->color)?></p>
                <br><p>Modelo: <?php echo ($auto->modelo)?></p>
                <br><p>Capacidad: <?php echo ($auto->capacidad)?> personas</p>
            </div>
        </div>
        <div class='clear'></div>

        </div>
        <div class="form-actions">
            <a href="<?php echo site_url('reservas/') ?>">Reserva</a>
        </div>
    <?php endforeach; ?>

<?php else : ?>
    <div class="alert alert-info">
        No Posts were found.
    </div>
<?php endif; ?>