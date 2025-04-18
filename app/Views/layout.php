<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection("titulo") ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Encabezado -->
    <header class="py-2 bg-light border-bottom">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <!-- Logo al lado de la barra de búsqueda -->
                <a class="navbar-brand me-3" href="<?php echo base_url(); ?>">
                    <img src="https://via.placeholder.com/100x40?text=Logo" alt="Logo">
                </a>
                <form class="d-flex" style="max-width: 700px;">
                    <input class="form-control me-2" type="search" placeholder="Buscar" style="width: 100%;">
                    <button class="btn btn-outline-primary" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </header>

    <!-- Menú de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>/QuienesSomos">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a><!-- Mantener si no hay página -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Usuario</a><!-- Mantener si no hay página -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection("contenido") ?>

    <!-- Pie de página combinado -->
    <footer class="bg-light py-3 mt-4">
        <div class="container text-center">
            <!-- Enlaces organizados horizontalmente -->
            <p>
                <a href="<?php echo base_url(); ?>/TerminosYUsos" class="text-decoration-none me-3 text-dark">Términos y Usos</a>
                <a href="<?php echo base_url(); ?>/InformacionDeContacto" class="text-decoration-none me-3 text-dark">Información de Contacto</a>
                <a href="<?php echo base_url(); ?>/Comercializacion" class="text-decoration-none text-dark">Comercio</a>
            </p>
            <!-- Texto de derechos reservados -->
            <p class="mt-2">© 2025 TECNALIX. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>

