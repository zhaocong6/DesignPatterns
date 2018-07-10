<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-10
 * Time: 下午1:56
 */

class BmwCar implements CarInterface
{
    public function color(): string
    {
        // TODO: Implement color() method.
        return '红色';
    }

    public function brand(): string
    {
        // TODO: Implement brand() method.
        return '宝马';
    }
}