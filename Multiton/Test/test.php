<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-11
 * Time: 下午5:11
 */

include '../Car.php';

$bmw = Car::instance('bmw');
$byd = Car::instance('byd');

$bmw->name = '宝马';
$byd->name = '比亚迪';

$bmw->start();
$byd->start();
