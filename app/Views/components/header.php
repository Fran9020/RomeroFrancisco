<!-- barra de navegacion de arriba -->
<nav class="navbar custom-nav">
    <!-- contenedor para alinear el logo y los links -->
    <div class="container d-flex justify-content-between align-items-center">
        <!-- logo que lleva a la pagina principal -->
        <a class="navbar-brand" href="<?= base_url(); ?>">
            <img src="<?= base_url('public/assets/img/Logo.png') ?>" alt="Logo Game-Box" class="nav-logo">
        </a>
        <!-- lista de links de navegacion -->
        <ul class="navbar-nav d-flex flex-row justify-content-end align-items-center">
            <!-- link a la pagina de quienes somos -->
            <li class="nav-item me-3">
                <a class="nav-link" href="<?= base_url('QuienesSomos'); ?>">Quienes Somos</a>
            </li>
            <!-- link a la pagina de comercializacion -->
            <li class="nav-item me-3">
                <a class="nav-link" href="<?= base_url('Comercializacion'); ?>">Comercialización</a>
            </li>
            <!-- link a la pagina de informacion de contacto -->
            <li class="nav-item me-3">
                <a class="nav-link" href="<?= base_url('InformacionDeContacto'); ?>">Información de Contacto</a>
            </li>
            <!-- link a la pagina de terminos y usos -->
            <li class="nav-item me-3">
                <a class="nav-link" href="<?= base_url('TerminosYUsos'); ?>">Términos y Usos</a>
            </li>
            <!-- Icono de usuario con desplegable, visible solo si hay sesion activa -->
            <?php if (session()->has('id_rol')): ?>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle user-icon-container" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?= base_url('public/assets/img/icono_usuario.png') ?>" alt="Icono de usuario" class="user-icon" style="width: 30px; height: 30px;">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end custom-dropdown" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="<?= base_url('editar_perfil'); ?>">Editar Perfil</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('cerrar_sesion'); ?>">Cerrar Sesión</a></li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>