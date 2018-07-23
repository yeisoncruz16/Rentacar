<div class="admin-box">
    <h1>Reservas</h1>

    <?php echo form_open(current_url(), 'class="form-horizontal" enctype="multipart/form-data" '); ?>

    <div class="control-group <?php if (form_error('ciudad_reserva')) echo 'error'; ?>">
        <label for="" class="">Ciudad de reserva</label>
        <div class="controls">

            <select type="ciudad_reserva" name="ciudad_reserva" class="input-small" value="<?php echo isset($reservas) ? $reservas->ciudad_reserva : set_value('ciudad_reserva'); ?>" >
                <?php if (form_error('ciudad_reserva')) echo '<span class="help-inline">'. form_error('ciudad_reserva') .'</span>'; ?>
                <option value="" >  </option>
                <option value="Armenia" >Armenia</option>
                <option value="Pereira" >Pereira</option>
                <option value="Manizales" >Manizales</option>
            </select>
        </div>
    </div>

    <div class="control-group <?php if (form_error('fecha_reserva')) echo 'error'; ?>">
        <label for="" class="">Fecha de reserva</label>
        <div class="controls">
            <input type="date" name="fecha_reserva" class="input-medium" value="<?php echo isset($reservas) ? $reservas->fecha_reserva : set_value('fecha_reserva'); ?>" />
            <?php if (form_error('fecha_reserva')) echo '<span class="help-inline">'. form_error('fecha_reserva') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('hora_reserva')) echo 'error'; ?>">
        <label for="" class="">Hora de reserva</label>
        <div class="controls">
            <input type="time" name="hora_reserva" class="input-medium" value="<?php echo isset($reservas) ? $reservas->hora_reserva : set_value('hora_reserva'); ?>" />
            <?php if (form_error('hora_reserva')) echo '<span class="help-inline">'. form_error('hora_reserva') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('ciudad_devolucion')) echo 'error'; ?>">
        <label for="" class="">Ciudad de devolucion</label>
        <div class="controls">
            <select type="ciudad_devolucion" name="ciudad_devolucion" class="input-small" value="<?php echo isset($reservas) ? $reservas->ciudad_devolucion : set_value('ciudad_devolucion'); ?>" >
            <?php if (form_error('ciudad_devolucion')) echo '<span class="help-inline">'. form_error('ciudad_devolucion') .'</span>'; ?>
                <option value="" >  </option>
                <option value="Armenia" >Armenia</option>
                <option value="Pereira" >Pereira</option>
                <option value="Manizales" >Manizales</option>
            </select>
        </div>
    </div>

    <div class="control-group <?php if (form_error('fecha_devolucion')) echo 'error'; ?>">
        <label for="" class="">Fecha de devolucion</label>
        <div class="controls">
            <input type="date" name="fecha_devolucion" class="input-medium" value="<?php echo isset($reservas) ? $reservas->fecha_devolucion : set_value('fecha_devolucion'); ?>" />
            <?php if (form_error('fecha_devolucion')) echo '<span class="help-inline">'. form_error('fecha_devolucion') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('hora_devolucion')) echo 'error'; ?>">
        <label for="" class="">Hora de devolucion</label>
        <div class="controls">
            <input type="time" name="hora_devolucion" class="input-medium" value="<?php echo isset($reservas) ? $reservas->hora_devolucion : set_value('hora_devolucion'); ?>" />
            <?php if (form_error('hora_devolucion')) echo '<span class="help-inline">'. form_error('hora_devolucion') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('observaciones')) echo 'error'; ?>">
        <label for="body">Observaciones</label>
        <div class="controls">
            <?php if (form_error('observaciones')) echo '<span class="help-inline">'. form_error('observaciones') .'</span>'; ?>
            <textarea name="observaciones" class="input-xxlarge" rows="10"><?php echo isset($reservas) ? $reservas->observaciones : set_value('observaciones') ?></textarea>
        </div>
    </div>

    <div class="form-actions">
        <input type="submit" name="submit" class="btn btn-primary" value="Reservar" />
        or <a href="<?php echo site_url(SITE_AREA .'/content/reservas') ?>">Cancelar</a>
    </div>

    <?php echo form_close(); ?>
</div>

