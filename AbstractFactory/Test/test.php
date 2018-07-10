<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-9
 * Time: 下午5:28
 */

include '../Car.php';
include '../Interface/CarInterface.php';
include '../src/FordCar.php';
include '../src/BmwCar.php';
include '../Exception/AbstractFactoryException.php';

$car = new Car();

try{
    $ford = $car->instance(FordCar::class);
    echo $ford->accelerator(1);

    echo PHP_EOL;

    $bmw = $car->instance(BmwCar::class);
    echo $bmw->brake(0);

    echo PHP_EOL;
    $bmw = $car->instance(Bmw2Car::class);
}catch (AbstractFactoryException $exception){
    echo $exception->getMessage();
}
