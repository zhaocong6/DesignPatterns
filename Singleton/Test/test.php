<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-9
 * Time: 下午6:08
 */

include '../Car.php';
include '../Exception/SingletonException.php';

try{
    $car1 = Car::instance();

    $car1->start();

}catch (SingletonException $exception){
    echo $exception->getMessage();
}

