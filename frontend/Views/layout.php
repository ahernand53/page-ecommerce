<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Tienda Virtual">
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci alias assumenda autem commodi deleniti distinctio, dolores in natus nemo nostrum praesentium quaerat quo reiciendis repellat reprehenderit temporibus ullam velit!">
    <meta name="keyword" content="Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing, elit, Ab, adipisci, alias, assumenda, autem commodi ">
    
    <title>Proyecto E-Commerce</title>

    <link rel="icon" href="http://localhost:8000/backend/Views/img/plantilla/icono.png">

    <!--=====================================================
    =       MANTENER LA RUTA FIJA DEL PROYECTO              =
    ======================================================-->

    <?php
        $url = Ruta::getRuta();
    ?>

    <link rel="stylesheet" href="<?= $url;?>Views/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $url;?>Views/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $url;?>Views/css/cabezote.css">
    <link rel="stylesheet" href="<?= $url;?>Views/css/plantilla.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">
</head>
<body>

    <!--=====================================================
                            HEADER
    ======================================================-->

    <?php

        include 'modulos/header.php';

        $rutas = array();

        if (isset($_GET['ruta'])){
            $rutas = explode('/', $_GET['ruta']);
            if($rutas[0] == 'bolsos'){
                include 'modulos/productos.php';
            } else {
                include 'modulos/404.php';
            }
        }

    ?>

    <script src="<?= $url; ?>Views/js/plugins/jquery.min.js"></script>
    <script src="<?= $url; ?>Views/js/plugins/bootstrap.min.js"></script>
    <script src="<?= $url; ?>Views/js/cabezote.js"></script>
    <script src="<?= $url; ?>Views/js/plantilla.js"></script>
</body>
</html>