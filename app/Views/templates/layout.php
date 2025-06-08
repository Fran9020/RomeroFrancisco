<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Configuración básica de la página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la página -->
    <title><?= esc($title ?? 'Game-Box') ?></title>
    <!-- Icono que aparece en la pestaña del navegador -->
    <link rel="icon" href="<?= base_url('public/assets/img/logo.png') ?>" type="image/x-icon">

    <!-- Iconos de Bootstrap para usar si es necesario -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Estilos de Bootstrap para el diseño -->
    <link href="<?= base_url('public/assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Nuestros estilos personalizados -->
    <link href="<?= base_url('public/assets/css/mycustom.css') ?>" rel="stylesheet">
</head>
<body>
    <!-- Parte de arriba con el menú -->
    <?= view('components/header') ?>

    <!-- Parte principal donde va el contenido de cada página -->
    <main>
        <!-- Mostrar mensajes flash -->
        <?php if (session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= esc(session('success')) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->has('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= esc(session('error')) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?= $content ?? '' ?>
    </main>

    <!-- Parte de abajo con los datos de contacto y redes -->
    <?= view('components/footer') ?>

    <!-- Scripts -->
    <!-- Script para que funcione el diseño con Bootstrap -->
    <script src="<?= base_url('public/assets/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Nuestro script personalizado (debe cargarse después de Bootstrap) -->
    <script src="<?= base_url('public/assets/js/custom.js') ?>"></script>
</body>
</html>