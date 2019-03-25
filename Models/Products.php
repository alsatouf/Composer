<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/24/2019
 * Time: 6:06 PM
 */

namespace MyApp\Models\Product;
use MyApp\Models\ExceptionNumeric\ExceptionsNumeric;
use MyApp\Models\ExceptionString\ExceptionsString;

require 'ExceptionsNumeric.php';
require 'ExceptionsString.php';


class Products
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $vat;
    private $created;

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

    public function setName($name)
    {
        if (isset($name) && !is_numeric($name))
            $this->name = $name;
        else
            throw new ExceptionsString();
    }
    public function getName()
    {
        return $this->name;
    }

    public function setDes($des)
    {
        if (isset($des) && !is_numeric($des))
            $this->description = $des;
        else
            throw new ExceptionsString();
    }
    public function getDes()
    {
        return $this->description;
    }

    public function setPrice($price)
    {
        if (isset($price) && is_numeric($price))
            $this->price = $price;
        else
            throw new ExceptionsNumeric();
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function setVat($vat)
    {
        if (isset($vat))
            $this->vat = $vat;
        else
            throw new ExceptionsNumeric();
    }
    public function getVat()
    {
        return $this->vat;
    }

    public function setCreated($created)
    {
        if (isset($created))
            $this->created = $created;
        else
            throw new ExceptionsString();
    }
    public function getCreated()
    {
        return $this->created;
    }
}