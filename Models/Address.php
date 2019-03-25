<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/24/2019
 * Time: 6:07 PM
 */

namespace MyApp\Models\AddressNS;
use MyApp\Models\ExceptionNumeric\ExceptionsNumeric;
use MyApp\Models\ExceptionString\ExceptionsString;

require 'ExceptionsNumeric.php';
require 'ExceptionsString.php';

class Address
{
    private $id;
    private $street;
    private $number;
    private $postalcode;
    private $city;
    private $country;

    public function setId($id)
    {
        if (is_numeric($id))
            $this->id = $id;
        else
            throw new ExceptionsNumeric();
    }
    public function getId()
    {
        return $this->id;
    }

    public function setStreet($street)
    {
        if (isset($street) && !is_numeric($street))
            $this->street = $street;
        else
            throw new ExceptionsString();
    }
    public function getStreet()
    {
        return $this->street;
    }

    public function setNumber($number)
    {
        if (isset($number) && is_numeric($number))
            $this->number = $number;
        else
            throw new ExceptionsNumeric();
    }
    public function getNumber()
    {
        return $this->number;
    }

    public function setPc($pc)
    {
        if (isset($pc) && is_numeric($pc))
            $this->postalcode = $pc;
        else
            throw new ExceptionsNumeric();
    }
    public function getPc()
    {
        return $this->postalcode;
    }

    public function setCity($city)
    {
        if (isset($city) && !is_numeric($city))
            $this->city = $city;
        else
            throw new ExceptionsString();
    }
    public function getCity()
    {
        return $this->city;
    }

    public function setCountry($cou)
    {
        if (isset($cou) && !is_numeric($cou))
            $this->country = $cou;
        else
            throw new ExceptionsString();
    }
    public function getCountry()
    {
        return $this->country;
    }
}