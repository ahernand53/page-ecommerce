<?php
/**
 * Created by PhpStorm.
 * User: ahernand53
 * Date: 12/09/18
 * Time: 11:58 AM
 */

require_once 'conexion.php';

class Producto
{

    public static function showCategories($table)
    {
        $query = 'SELECT * FROM ' . $table;

        $stmt = Conexion::connect()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function showSubCategries($table, $id)
    {
        $query = "SELECT * FROM $table WHERE id_categoria LIKE :id";

        $stmt = Conexion::connect()->prepare($query);
        $stmt->bindParam(
            ':id',
            $id,
            PDO::PARAM_INT
        );
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}