<!-- inicio del documento -->
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- configuracion basica de la pagina -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- titulo de la pagina -->
    <title><?= $title ?? 'Game-Box' ?></title>
    <!-- icono que aparece en la pestaña del navegador -->
    <link rel="icon" href="public/assets/img/logo.png" type="image/x-icon">

    <!-- iconos de bootstrap para usarlos si queremos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- estilos de bootstrap para el diseño -->
    <link href="<?= base_url('public/assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- nuestros estilos personalizados -->
    <link href="<?= base_url('public/assets/css/mycustom.css'); ?>" rel="stylesheet">
</head>
<body>
    <!-- parte de arriba con el menu -->
    <?= view('components/header') ?>

    <!-- parte principal donde va el contenido de cada pagina -->
    <main>
        <?= $content ?? '' ?>
    </main>

    <!-- parte de abajo con los datos de contacto y redes -->
    <?= view('components/footer')?>

    <!-- script para que funcione el diseño con bootstrap -->
    <link href="<?= base_url('public/assets/js/bootstrap.bundle.min.js'); ?>" rel="stylesheet">
    
</body>
</html>
