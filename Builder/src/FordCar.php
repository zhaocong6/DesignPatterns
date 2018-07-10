<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-10
 * Time: 下午1:58
 */

class FordCar implements CarInterface
{
    public function color(): string
    {
        // TODO: Implement color() method.
        return '蓝色';
    }

    public function brand(): string
    {
        // TODO: Implement brand() method.
        return '福特';
    }
}