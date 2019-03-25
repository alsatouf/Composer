<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/25/2019
 * Time: 7:54 AM
 */

namespace MyApp\Controllers\Parent;
use MyApp\Controllers\CrudInterface\CRUD;
use Exception;
use PDO;
require 'CRUDInterface.php';

abstract class ParentManager implements CRUD
{
    public function getConnection()
    {
        try
        {
            $pdo = new PDO("mysql:host=localhost:3306;dbname=db", "root", "");
            echo "<h1 style='background-color: green'>Connection is Done</h1>";
            return $pdo;
        }
        catch (Exception $ex)
        {
            echo "<h1 style='background-color: red'>Error While connection</h1>";
            return false;
        }
    }
}