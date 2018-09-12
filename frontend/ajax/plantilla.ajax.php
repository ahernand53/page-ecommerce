<?php

require_once '../Controllers/LayoutController.php';
require_once '../Models/Plantilla.php';

class AjaxPlantilla
{
    public function StyleAjax()
    {
        $respuesta = LayoutController::callStyle();

        echo json_encode($respuesta);
    }
}

$objecto = new AjaxPlantilla();
$objecto->StyleAjax();