<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/24/2019
 * Time: 6:39 PM
 */

namespace MyApp\Models\ExceptionString;


class ExceptionsString extends \Exception
{
    public function getEmptyError()
    {
        $errorMsg = "<h3 style='background-color: red'>Error on line: ".$this->getLine().
            "in file: ".$this->getFile().
            "Error Message: ".$this->getMessage()."Please Fill all Fields And Should be a String</h3>";
        return $errorMsg;
    }
}