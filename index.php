<?php
// import autoload composer ...
require "vendor/autoload.php";
// Call namespaces ...
use MyApp\Helpers\ConnectDB\ConnectionDB;
use MyApp\Models\Product\Products;
use MyApp\Models\AddressNS\Address;
use MyApp\Controllers\Parent\ParentManager;
use MyApp\Controllers\AddManager\AddressManager;
use MyApp\Controllers\ProdManager\ProductManager;
// connection to database ...
//$connect = new ConnectionDB();
//try
//{
//    $connect->connect();
//}
//catch (MyApp\Helpers\ExceptionDB\ExceptionsDB $e)
//{
//    echo $e->getErrorDB();
//}
// call manager ...
$addManager = new AddressManager();
echo $addManager->getAllList();
// call table address ...

$add = new Address();

try
{
    $add->setNumber("");
    echo $add->getNumber();
}
catch (\MyApp\Models\ExceptionNumeric\ExceptionsNumeric $e)
{
    echo $e->getNumericError();
}

$pro = new Products();

try
{
    $pro->setId("");
    echo $pro->getId();
}
catch (\MyApp\Models\ExceptionNumeric\ExceptionsNumeric $e)
{
    echo $e->getNumericError();
}
