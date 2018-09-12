<?php

class LayoutController
{

    /*===== LLAMAMOS LA PLANTILLA =====*/

    public function call()
    {
        include 'Views/layout.php';
    }

    /*===== TRAEMOS LOS ESTILOS DINAMICOS DE LA PLANTILLA =====*/

    public function callStyle()
    {
        $tabla = 'plantilla';
        $respuesta = Plantilla::mdlEstiloPlantilla($tabla);

        return $respuesta;

    }


}