<?php if(isset($autos)) : ?>

    <?php foreach ($autos as $auto) : ?>

        <div class="post">
            <?php echo auto_typography($auto->placa) ?>
            <?php echo auto_typography($auto->nombre)?>
            <?php echo auto_typography($auto->modelo)?>
            <?php echo auto_typography($auto->color)?>
            <?php echo auto_typography($auto->estado)?>
            <?php echo auto_typography($auto->capacidad)?>
            <?php echo auto_typography($auto->disponibilidad)?>
            <img src="<?php echo base_url('upload/'.$auto->imagen.".jpg"); ?>" width="80" height="70"/>
        </div>
    <?php endforeach; ?>

<?php else : ?>
    <div class="alert alert-info">
        No Posts were found.
    </div>
<?php endif; ?>