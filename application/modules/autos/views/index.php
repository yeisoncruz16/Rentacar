<?php if(isset($autos)) : ?>

    <?php foreach ($autos as $auto) : ?>

        <div class="post">
            <h2><?php e($auto->imagen) ?></h2>

            <?php echo auto_typography($auto->nombre) ?>
        </div>
    <?php endforeach; ?>

<?php else : ?>
    <div class="alert alert-info">
        No Posts were found.
    </div>
<?php endif; ?>