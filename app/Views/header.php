<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnalix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Encabezado ajustado -->
    <header class="py-2 bg-light border-bottom">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <!-- Logo al lado de la barra de búsqueda -->
                <a class="navbar-brand me-3" href="<?php echo base_url(); ?>">
                <img src="http://localhost/RomeroFrancisco/assets/img/Logo.png" alt="Logo" style="width: 50px; height: auto;">
                </a>
                <form class="d-flex w-75">
                    <input class="form-control me-2" type="search" placeholder="Buscar" style="width: 100%;">
                    <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </header>

    <!-- Menú de navegación actualizado -->
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
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <!-- Dropdown para "Usuario" -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="usuarioDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuario
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="usuarioDropdown">
                            <li><a class="dropdown-item" href="#">Lista de Deseos</a></li>
                            <li><a class="dropdown-item" href="#">Historial de Compras</a></li>
                            <li><a class="dropdown-item" href="#">Cupones</a></li>
                            <li><a class="dropdown-item" href="#">Billetera</a></li>
                            <li><a class="dropdown-item" href="#">Canjear Código</a></li>
                            <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                            <li><a class="dropdown-item" href="#">Cuenta</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> //CORREGIR ESTA PARTE
    
</body>
</html>

