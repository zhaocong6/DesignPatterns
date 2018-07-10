<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-10
 * Time: 上午10:02
 */

class Car
{
    const FUNS = [
        'start'
    ];

    private function __construct(){}

    private static $container;

    /**
     * 启动汽车
     */
    private function start()
    {
        echo '汽车启动成功';
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws SingletonException
     */
    public function __call($name, $arguments)
    {
        self::isFun($name);
        return call_user_func_array([self::$container, $name], $arguments);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws SingletonException
     */
    public static function __callStatic($name, $arguments)
    {
        self::instance();
        self::isFun($name);
        return call_user_func_array([self::$container, $name], $arguments);
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

    /**
     * @param $name
     * @throws SingletonException
     */
    private static function isFun($name)
    {
        if (!in_array($name, self::FUNS)){
            throw new SingletonException('该方法不存在!');
        }
    }

    private function __clone(){}
    private function __wakeup(){}
}