<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/25/2019
 * Time: 8:44 AM
 */

namespace MyApp\Controllers\AddManager;
use MyApp\Controllers\Parent\ParentManager;
use PDO;

class AddressManager extends ParentManager
{
    public function getConnection()
    {
        return parent::getConnection();
    }
    // get all List ...
    public function getAllList()
    {
        $sql = "SELECT * FROM address";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Address");
        $showData = $stmt->execute();
        if ($showData)
            echo "<b style='background-color: green'>List DONE</b><br/>";
        else
            echo "<b style='background-color: red'>List FAILED</b><br/>";
        while ($data = $stmt->fetch()) {
            echo $data->getId() . ") ";
            echo $data->getStreet() . " | ";
            echo $data->getNumber() . " | ";
            echo $data->getPostalCode() . " | ";
            echo $data->getCity() . " | ";
            echo $data->getCountry() . "<br/>";
        }
        return true;
    }
}