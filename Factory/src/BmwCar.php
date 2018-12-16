<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-9
 * Time: 下午5:25
 */

class BmwCar implements CarInterface
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