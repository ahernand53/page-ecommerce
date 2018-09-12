<?php
/**
 * Created by PhpStorm.
 * User: ahernand53
 * Date: 12/09/18
 * Time: 11:58 AM
 */

class ProductoController
{

    public static function getCategories()
    {
        $table = 'categorias';
        $response = Producto::showCategories($table);

        return $response;
    }

    public static function getSubCategories($id)
    {
        $table = 'sub_categorias';
        $response = Producto::showSubCategries($table, $id);
        return $response;
    }
}