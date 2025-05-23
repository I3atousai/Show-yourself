<?php

namespace App\DB;
require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";

use PDO;
use PDOException;

class DB
{
    public static function connect(): PDO
    {
        try {
            $dotenv = \Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
            $dotenv->load();

            // подключаемся к серверу
            $conn = new PDO("mysql:host=localhost;dbname=". $_ENV['DB_NAME'] , $_ENV['USERNAME'], $_ENV['PASSWORD'], [
                 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
            return $conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

}
