<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-10
 * Time: 下午10:08
 */

include '../Interface/PrototypeInterface.php';
include '../Car.php';

$car = new Car();
$car_clone = $car->getCopy();
$car_clone->getInfo();
