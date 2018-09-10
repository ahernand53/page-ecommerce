<?php
ini_set('error_reporting', E_ALL);

include_once 'Controllers/LayoutController.php';

$layout = new LayoutController();
$layout->call();