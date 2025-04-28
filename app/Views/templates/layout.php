<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game-Box</title>
    <link rel="icon" href="http://localhost/RomeroFrancisco/public/assets/img/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link href="<?= base_url('public/assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <link href="<?= base_url('public/assets/css/mycustom.css'); ?>" rel="stylesheet">
</head>
<body>
    <!-- Encabezado -->
    <?= view('components/header') ?>

    <!-- Contenido principal (sección que cambiará) -->
    <main>
        <?= $content ?? '' ?>
    </main>

    <!-- Pie de página -->
    <?= view('components/footer')?>

    
    <!-- Scripts de Bootstrap -->
    <link href="<?= base_url('public/assets/js/bootstrap.bundle.min.js'); ?>" rel="stylesheet">
    
</body>
</html>

