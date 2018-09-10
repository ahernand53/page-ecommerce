<?php

require_once 'conexion.php';

class PlantillaModel
{
    static public function mdlEstiloPlantilla($tabla)
    {
        $stmt = Conexion::connect()->prepare(
            'SELECT * FROM ' . $tabla
        );

        $stmt->execute();

        return $stmt->fetch();

    }
}