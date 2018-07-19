<?php if(isset($autos)) : ?>

    <?php foreach ($autos as $auto) : ?>

        <div class="post">
            <?php echo auto_typography($auto->nombre) ?>
            <?php echo auto_typography($auto->placa)?>
            <img src="<?php echo base_url('upload/'.$auto->imagen.".jpg"); ?>" width="80" height="70"/>
        </div>
    <?php endforeach; ?>

<?php else : ?>
    <div class="alert alert-info">
        No Posts were found.
    </div>
<?php endif; ?>

