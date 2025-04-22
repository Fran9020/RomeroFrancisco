<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnalix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <link href="<?= base_url('assets/css/mycustom.css'); ?>" rel="stylesheet">

    
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

