<!-- barra de navegacion de arriba -->
<nav class="navbar custom-nav">
    <!-- contenedor para alinear el logo y los links -->
    <div class="container d-flex justify-content-between align-items-center">
        <!-- logo que lleva a la pagina principal -->
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <img src="public/assets/img/Logo.png" alt="Logo" class="nav-logo">
        </a>
        <!-- lista de links de navegacion -->
        <ul class="navbar-nav d-flex flex-row justify-content-end">
            <!-- link a la pagina de quienes somos -->
            <li class="nav-item me-3">
                <a class="nav-link" href="<?php echo base_url(); ?>/QuienesSomos">Quienes Somos</a>
            </li>
            <!-- link a la pagina de comercializacion -->
            <li class="nav-item me-3">
                <a class="nav-link" href="<?php echo base_url(); ?>/Comercializacion">Comercializacion</a>
            </li>
            <!-- link a la pagina de informacion de contacto -->
            <li class="nav-item me-3">
                <a class="nav-link" href="<?php echo base_url(); ?>/InformacionDeContacto">Informacion de Contacto</a>
            </li>
            <!-- link a la pagina de terminos y usos -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>/TerminosYUsos">Terminos y Usos</a>
            </li>
        </ul>
    </div>
</nav>

<!-- script para que funcione el diseño con bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>