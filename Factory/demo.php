<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-9
 * Time: 下午5:28
 */

include './Car.php';
include './src/FordCar.php';
include './src/BmwCar.php';
include './Exception/FactoryException.php';

$car = new Car();

try{

    $ford = $car->instance(FordCar::class);

    $ford = $car->instance(BmwCar::class);

    $ford = $car->instance(Bmw2Car::class);
}catch (FactoryException $exception){
    echo $exception->getMessage();
}
