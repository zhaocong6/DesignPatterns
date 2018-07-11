<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-11
 * Time: 下午3:24
 */

include '../Interface/CarInterface.php';
include '../src/BmwCar.php';
include '../src/FordCar.php';
include '../Car.php';

$bmw         = new BmwCar();
$ford        = new FordCar();
$bmw_car_adapter = new Car($bmw);

$bmw_car_adapter->playMp3();
echo PHP_EOL;
$bmw_car_adapter->playVideo();
echo PHP_EOL;

$ford_car_adapter = new Car($ford);
$ford_car_adapter->playMp3();
echo PHP_EOL;
$ford_car_adapter->playVideo();
echo PHP_EOL;