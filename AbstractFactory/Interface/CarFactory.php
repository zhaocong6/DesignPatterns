<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-11
 * Time: 下午5:43
 */

interface CarFactory
{
    public function instance(string $class) :CarInterface;
}