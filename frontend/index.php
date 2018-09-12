<?php
ini_set('error_reporting', E_ALL);

require_once 'Controllers/LayoutController.php';
require_once 'Controllers/ProductoController.php';

require_once 'Models/Producto.php';
require_once 'Models/Plantilla.php';
require_once 'Models/Ruta.php';

$layout = new LayoutController();
$layout->call();