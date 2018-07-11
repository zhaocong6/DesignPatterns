<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-10
 * Time: 上午10:02
 */

class Car
{
    private function __construct(){}

    private static $container;

    /**
     * 启动汽车
     */
    public function start()
    {
        echo '汽车启动成功';
    }

    /**
     * 实例化对象
     * @return Car
     */
    public static function instance()
    {
        if (empty(self::$container)){
            self::$container = new Car();
        }

        return self::$container;
    }

    private function __clone(){}
    private function __wakeup(){}
}