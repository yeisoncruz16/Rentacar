<link rel="stylesheet" type="text/css" href="http://bonfire.com/themes/default/css/estilos.css" media="screen" />
<link rel="stylesheet" type="text/css" href="http://bonfire.com/themes/default/css/fontello.css" media="screen" />

<header>
<div class="contenedor">
    <a href="<?php echo site_url('rent/') ?>" class="rent"> Rent a Car</a>
    <nav class="menus">
        <ul>
            <li> <a href="<?php echo site_url('rent/') ?>">Inicio</a> </li>
            <li> <a href="<?php echo site_url('autos/') ?>">Vehículos</a> </li>
            <li> <a href="<?php echo site_url('requisitos/') ?>">Requisitos</a> </li>
            <li> <a href="<?php echo site_url('login/') ?>">Iniciar sesion</a> </li>
        </ul>
    </nav>
</div>
</header>

<main>
    <section id="banner">
        <img src="<?php echo base_url('themes/default/images/img/banner.jpg'); ?>">
        <div class="contenedor">
            <h2>Renta un auto de la manera más fácil y cómoda</h2>
        </div>
    </section>

    <section id="bienvenidos">
        <div class="contenedor">
            Aquí tedrá acceso a una amplia oferta de vehículos a su disposición. Buscamos siempre que su experiencia sea la mejor y por ello contamos con personal capacitado y una completa logistica desde su primer contacto con nosotros hasta la teminación del contrato.
        </div>
    </section>

    <section id="blog">
        <h3>Estos son los favoritos de nuestros clientes</h3>
        <div class="contenedor">
            <article>
                <br>
                <h4>Nissan Versa</h4>
                <img src="<?php echo base_url('themes/default/images/img/banner.jpg'); ?>">
                <h4>Su comodidad,elegancia<br> y lujo la hace la favorita <br>de nuestros clientes</h4>
            </article>

            <article>
                <br>
                <h4>Toyota Fortuner</h4>
                <img src="<?php echo base_url('themes/default/images/img/banner.jpg'); ?>">
                <h4>Su potencial y diseño<br> la convierte en una de las<br> preferidas</h4>
            </article>

            <article>
                <br>
                <h4>Chevrolet Aveo</h4>
                <img src="<?php echo base_url('themes/default/images/img/banner.jpg'); ?>" >
                <h4>Gracias a su economía<br> permite a nuestros clientes<br> una solución efectiva<br> y accesible </h4>
            </article>
        </div>
    </section>

    <section id="info">
        <h3>¿Por qué rentar un auto en Rent a Car?</h3>
        <div class="contenedor">

            <div class="info-log">
                <img src="<?php echo base_url('themes/default/images/img/auto.png'); ?>">
                <h4>Accesible</h4>
            </div>

            <div class="info-log">
                <img src="<?php echo base_url('themes/default/images/img/dinero.png'); ?>">
                <h4>Económico</h4>
            </div>

            <div class="info-log">
                <img src="<?php echo base_url('themes/default/images/img/check.png'); ?>">
                <h4>Flexible</h4>
            </div>

        </div>
    </section>
</main>

<footer>
<div class="contenedor">
    <p id="copy">Rent a Car &copy; 2018</p>
    <div class="sociales">
        <a class="icon-facebook-squared" href="https://www.facebook.com/Gallo-Garrido-Rent-A-Car-1078192468886310/"> </a>
    </div>
</div>
</footer>
