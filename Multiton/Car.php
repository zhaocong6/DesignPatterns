<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-11
 * Time: 下午5:05
 */

class Car
{
    private static $container;

    public $name;

    private function __construct(){}

    public function start()
    {
        echo $this->name.'汽车启动了!';
    }

    /**
     * 实例化对象
     * @param string $instance_name
     * @return Car
     */
    public static function instance(string $instance_name) :Car
    {
        if (!isset(self::$container[$instance_name])){
            self::$container[$instance_name] = new self();
        }

        return self::$container[$instance_name];
    }

    private function __clone(){}
    private function __wakeup(){}
}