<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-9
 * Time: 下午5:24
 */

class FordCar implements CarInterface
{
    public function __construct()
    {
        echo $this->getBrand();
        echo PHP_EOL;
    }

    public function getBrand():string
    {
        return '福特汽车!';
    }
}