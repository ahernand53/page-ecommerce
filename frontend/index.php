<?php
ini_set('error_reporting', E_ALL);

require_once 'Controllers/LayoutController.php';
require_once 'Models/PlantillaModel.php';

$layout = new LayoutController();
$layout->call();