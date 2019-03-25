<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/24/2019
 * Time: 1:48 PM
 */

namespace MyApp\Helpers\ConnectDB;
require 'ExceptionsDB.php';
use MyApp\Helpers\ExceptionDB\ExceptionsDB;

class ConnectionDB
{
    public function connect()
    {
        $pdo = new \PDO("mysql:host=localhost:3306;dbname=db", "root", "");
        if ($pdo)
            echo "<h1 style='background: green'>Connection Done</h1>";
        else
            throw new ExceptionsDB();
        return $pdo;
    }
}