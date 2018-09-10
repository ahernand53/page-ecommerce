<?php

class Conexion {

    public function connect()
    {
        $DB_SERVER = 'localhost';
        $DB_NAME = 'ecommerce';
        $DB_USER = 'root';
        $DB_PASSWORD = 'Admin123!';
        $DB_PORT = '3306';

        $CDN = "mysql:host=$DB_SERVER;dbname=$DB_NAME";
        $link = new PDO(
            $CDN,
            $DB_USER,
            $DB_PASSWORD,
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            )
        );

        return $link;
    }

}