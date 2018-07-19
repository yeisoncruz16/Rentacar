<div class="admin-box">
    <h3>Autos</h3>

    <?php echo form_open(); ?>

    <table class="table table-striped">
        <thead>
        <tr>
            <th class="column-check"><input class="check-all" type="checkbox" /></th>
            <th></th>
            <th style="width: 10em">Date</th>

        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="3">
                With selected:
                <input type="submit" name="submit" class="btn" value="Delete">
            </td>
        </tr>
        </tfoot>
        <tbody>
        <?php if (isset($autos) && is_array($autos)) :?>
            <?php foreach ($autos as $auto) : ?>
                <tr>

                    <td><input type="checkbox" name="checked[]" value="<?php echo $auto->autos_id ?>" /></td>
                    <td>
                        <a href="<?php echo site_url(SITE_AREA .'/content/autos/edit_post/'. $auto->autos_id) ?>">
                            <?php e($auto->nombre);?>
                            <img src="<?php echo base_url('upload/'.$auto->imagen.".jpg"); ?>" width="80" height="70"/>
                        </a>
                    </td>
                    <td>
                        <?php echo date('M j, Y g:ia'); ?>
                    </td>
                </tr>

            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">
                    <br/>
                    <div class="alert alert-warning">

                    </div>
                </td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

    <?php echo form_close(); ?>
</div>