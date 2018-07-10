<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-9
 * Time: 下午6:08
 */

include './Car.php';
include './Exception/SingletonException.php';

try{
    $car1 = Car::instance();
    $car2 = Car::instance();

    $car1->start();

    echo PHP_EOL;
    Car::start();

    echo PHP_EOL;
    $car2->start1();

}catch (SingletonException $exception){
    echo $exception->getMessage();
}

