<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-9
 * Time: 下午5:42
 */
interface CarInterface
{
    /**
     * 油门
     * @param int $status
     * @return string
     */
    public function accelerator(int $status) :string;

    /**
     * 刹车
     * @param int $status
     * @return string
     */
    public function brake(int $status) :string;
}