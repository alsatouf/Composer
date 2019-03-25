<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/24/2019
 * Time: 1:52 PM
 */

namespace MyApp\Helpers\ExceptionDB;

class ExceptionsDB extends \Exception
{
    public function getErrorDB()
    {
        $errorMsg = "<h3 style='background-color: red'>Error on line: ".$this->getLine().
                    "in file: ".$this->getFile().
                    "Error Message: ".$this->getMessage()."Error While Connection To Database</h3>";
        return $errorMsg;
    }
}