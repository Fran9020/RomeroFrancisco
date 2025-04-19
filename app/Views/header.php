<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnalix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Encabezado -->
    <header class="py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img src="https://via.placeholder.com/100x40?text=Logo" alt="Logo">
                </a>
                <!-- Barra de búsqueda -->
                <form class="d-flex" style="width: 50%;">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-primary" type="submit">Buscar</button>
                </form>
                <!-- Enlaces -->
                <nav>
                    <a href="<?php echo base_url(); ?>/QuienesSomos" class="text-decoration-none me-3">Quienes Somos</a>
                    <a href="#" class="text-decoration-none me-3">Servicios</a>
                    <a href="#" class="text-decoration-none me-3">Usuario</a>
                </nav>
            </div>
        </div>
    </header>
