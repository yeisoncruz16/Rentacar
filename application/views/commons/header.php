<header>
    <div class="contenedor">
        <a href="<?php echo site_url() ?>" class="rent"> Rent a Car</a>
        <nav class="menus">
            <ul>
                <li> <a href="<?php echo site_url() ?>">Inicio</a> </li>
                <li> <a href="<?php echo site_url('autos/') ?>">Vehículos</a> </li>
                <li> <a href="<?php echo site_url('requisitos/') ?>">Requisitos</a> </li>

                <?php if($this->auth->is_logged_in()) {?>
                <li> <a href="<?php echo site_url('logout/') ?>">Cerrar sesion</a> </li>
                <?php } else{?>
                <li> <a href="<?php echo site_url('login/') ?>">Iniciar sesion</a> </li>
                <?php }?>
            </ul>
        </nav>
    </div>
</header>