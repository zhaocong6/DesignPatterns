<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-10
 * Time: 下午10:04
 */

class Car implements PrototypeInterface
{

    public $name = '宝马汽车!';

    public function getInfo()
    {
        echo $this->name;
    }

    public function getCopy() : PrototypeInterface
    {
        return clone $this;
    }

    private function __clone(){}
}