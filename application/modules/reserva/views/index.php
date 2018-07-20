<html lang= "es">
<meta charset="UTF-8">
<meta name="viewport" content= "width = device- width, user-scalable=no,
    initial-scale1, maximum-scale=1">

<head>
    <h1>Reservar</h1>
</head>
<div class="admin-box">

    <?php echo form_open(current_url(), 'class="form-horizontal" enctype="multipart/form-data" '); ?>

    <div class="control-group <?php if (form_error('ciudad_reserva')) echo 'error'; ?>">
        <label for="" class="">ciudad_reserva</label>
        <div class="controls">
            <input type="ciudad_reserva" name="ciudad_reserva" class="input-xxlarge" value="<?php echo isset($reservas) ? $reservas->ciudad_reserva : set_value('ciudad_reserva'); ?>" />
            <?php if (form_error('ciudad_reserva')) echo '<span class="help-inline">'. form_error('ciudad_reserva') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('fecha_reserva')) echo 'error'; ?>">
        <label for="" class="">fecha_reserva</label>
        <div class="controls">
            <input type="fecha_reserva" name="fecha_reserva" class="input-xxlarge" value="<?php echo isset($reservas) ? $reservas->fecha_reserva : set_value('fecha_reserva'); ?>" />
            <?php if (form_error('fecha_reserva')) echo '<span class="help-inline">'. form_error('fecha_reserva') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('modelo')) echo 'error'; ?>">
        <label for="" class="">hora_reserva</label>
        <div class="controls">
            <input type="hora_reserva" name="hora_reserva" class="input-xxlarge" value="<?php echo isset($reservas) ? $reservas->hora_reserva : set_value('hora_reserva'); ?>" />
            <?php if (form_error('hora_reserva')) echo '<span class="help-inline">'. form_error('hora_reserva') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('ciudad_devolucion')) echo 'error'; ?>">
        <label for="" class="">ciudad_devolucion</label>
        <div class="controls">
            <input type="ciudad_devolucion" name="ciudad_devolucion" class="input-xxlarge" value="<?php echo isset($reservas) ? $reservas->ciudad_devolucion : set_value('ciudad_devolucion'); ?>" />
            <?php if (form_error('ciudad_devolucion')) echo '<span class="help-inline">'. form_error('ciudad_devolucion') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('hora_devolucion')) echo 'error'; ?>">
        <label for="" class="">hora_devolucion</label>
        <div class="controls">
            <input type="hora_devolucion" name="hora_devolucion" class="input-xxlarge" value="<?php echo isset($reservas) ? $reservas->hora_devolucion : set_value('hora_devolucion'); ?>" />
            <?php if (form_error('hora_devolucion')) echo '<span class="help-inline">'. form_error('hora_devolucion') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('observaciones')) echo 'error'; ?>">
        <label for="" class="">observaciones</label>
        <div class="controls">
            <input type="observaciones" name="observaciones" class="input-xxlarge" value="<?php echo isset($reservas) ? $reservas->observaciones : set_value('observaciones'); ?>" />
            <?php if (form_error('observaciones')) echo '<span class="help-inline">'. form_error('observaciones') .'</span>'; ?>
        </div>
    </div>
    <div class="form-actions">
        <input type="submit" name="submit" class="btn btn-primary" value="Guardar" />
        or <a href="<?php echo site_url(SITE_AREA .'/reserva/') ?>">Cancelar</a>
    </div>

    <?php echo form_close(); ?>
</div>