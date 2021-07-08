<!DOCTYPE html>
<html lang="es-AR">

<head>
    <?php
    require 'parts/head_view.php'
    ?>
    <link rel="stylesheet" type='text/css' href="assets/css/index.css" />
    <link rel="stylesheet" type='text/css' href="assets/css/main.css" />
    <link rel="stylesheet" type='text/css' href="assets/css/sel_butacas.css" />
</head>

<body>
    <?php
    require 'parts/header_view.php';
    ?>
    <main>
        <h2><?= $title || 'Selección de butacas' ?></h2>
        <section class='content'>
            <section class='cron-container'>
                <h3>Tiempo restante</h3>
            </section>
            <section class='tickets-container card'>
                <h3>Resumen de compra</h3>
            </section>
            <section class='butacas-container'>
                <?php include("resources/butacas.svg"); ?>
            </section>
        </section>
    </main>
    <?php
    require 'parts/footer_view.php';
    ?>
</body>

</html>