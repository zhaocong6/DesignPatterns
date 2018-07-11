<?php
/**
 * 简单的工厂模式
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-9
 * Time: 下午5:17
 */

class Car implements CarFactory
{
    /**
     * @param string $class
     * @return CarInterface
     * @throws AbstractFactoryException
     */
    public function instance(string $class) :CarInterface
    {
        switch ($class){
            case FordCar::class:
                return new FordCar();
                break;
            case BmwCar::class:
                return new BmwCar();
                break;
            default:
                throw new AbstractFactoryException('此工厂没有该实例!');
        }
    }
}