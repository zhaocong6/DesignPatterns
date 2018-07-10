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
        echo '福特汽车!';
        echo PHP_EOL;
    }

    /**
     * @param int $status
     * @return string
     */
    public function accelerator($status) :string
    {
        return $status ? '加速成功!' : '加速失败';
    }

    /**
     * @param int $status
     * @return string
     */
    public function brake($status) :string
    {
        return $status ? '刹车成功!' : '刹车失败';
    }
}