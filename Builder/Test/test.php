<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-10
 * Time: 下午1:59
 */

include '../Car.php';
include '../Interface/CarInterface.php';
include '../src/BmwCar.php';
include '../src/FordCar.php';

$bmw  = new BmwCar();
$ford = new FordCar();

$car = new Car($bmw);
$car->getCarInfo();

echo PHP_EOL;

$car = new Car($ford);
$car->getCarInfo();
