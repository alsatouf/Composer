<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/24/2019
 * Time: 6:36 PM
 */

namespace MyApp\Models\ExceptionNumeric;


class ExceptionsNumeric extends \Exception
{
    public function getNumericError()
    {
        $errorMsg = "<h3 style='background-color: red'>Error on line: ".$this->getLine().
            "in file: ".$this->getFile().
            "Error Message: ".$this->getMessage()."Should be A Numeric</h3>";
        return $errorMsg;
    }
}