<html lang= "es">
<meta charset="UTF-8">
<meta name="viewport" content= "width = device- width, user-scalable=no,
    initial-scale1, maximum-scale=1">

<head>
    <h1>Autos</h1>
</head>
<div class="admin-box">
    <h1>Nuevo auto</h1>

    <?php echo form_open(current_url(), 'class="form-horizontal" enctype="multipart/form-data" '); ?>

    <div class="control-group <?php if (form_error('placa')) echo 'error'; ?>">
        <label for="" class="">Placa</label>
        <div class="controls">
            <input type="placa" name="placa" class="input-xxlarge" value="<?php echo isset($autos) ? $autos->placa : set_value('placa'); ?>" />
            <?php if (form_error('placa')) echo '<span class="help-inline">'. form_error('placa') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('nombre')) echo 'error'; ?>">
        <label for="" class="">Nombre</label>
        <div class="controls">
            <input type="nombre" name="nombre" class="input-xxlarge" value="<?php echo isset($autos) ? $autos->nombre : set_value('nombre'); ?>" />
            <?php if (form_error('nombre')) echo '<span class="help-inline">'. form_error('nombre') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('modelo')) echo 'error'; ?>">
        <label for="" class="">Modelo</label>
        <div class="controls">
            <input type="modelo" name="modelo" class="input-xxlarge" value="<?php echo isset($autos) ? $autos->modelo : set_value('modelo'); ?>" />
            <?php if (form_error('modelo')) echo '<span class="help-inline">'. form_error('modelo') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('color')) echo 'error'; ?>">
        <label for="" class="">Color</label>
        <div class="controls">
            <input type="clr" name="clr" class="input-xxlarge" value="<?php echo isset($autos) ? $autos->color : set_value('clr'); ?>" />
            <?php if (form_error('color')) echo '<span class="help-inline">'. form_error('color') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('estado')) echo 'error'; ?>">
        <label for="" class="">Estado</label>
        <div class="controls">
            <input type="estado" name="estado" class="input-xxlarge" value="<?php echo isset($autos) ? $autos->estado : set_value('estado'); ?>" />
            <?php if (form_error('estado')) echo '<span class="help-inline">'. form_error('estado') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('capacidad')) echo 'error'; ?>">
        <label for="" class="">Capacidad</label>
        <div class="controls">
            <input type="capacidad" name="capacidad" class="input-xxlarge" value="<?php echo isset($autos) ? $autos->capacidad : set_value('capacidad'); ?>" />
            <?php if (form_error('capacidad')) echo '<span class="help-inline">'. form_error('capacidad') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('disponibilidad')) echo 'error'; ?>">
        <label for="" class="">disponibilidad</label>
        <div class="controls">
            <input type="disponibilidad" name="disponibilidad" class="input-xxlarge" value="<?php echo isset($autos) ? $autos->disponibilidad : set_value('disponibilidad'); ?>" />
            <?php if (form_error('disponibilidad')) echo '<span class="help-inline">'. form_error('disponibilidad') .'</span>'; ?>
        </div>
    </div>

    <div class="control-group <?php if (form_error('imagen')) echo 'error'; ?>">
        <label for="" class="">imagen</label>
        <div class="controls">
            <input type="file" name="file" class="input-xxlarge" value="<?php echo isset($autos) ? $autos->imagen : set_value('imagen'); ?>" />
            <?php if (form_error('imagen')) echo '<span class="help-inline">'. form_error('imagen') .'</span>'; ?>
        </div>
    </div>
    <div class="form-actions">
        <input type="submit" name="submit" class="btn btn-primary" value="Guardar" />
        or <a href="<?php echo site_url(SITE_AREA .'/content/autos') ?>">Cancelar</a>
    </div>

    <?php echo form_close(); ?>
</div>
