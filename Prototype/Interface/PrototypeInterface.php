<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-10
 * Time: 下午10:03
 */

interface PrototypeInterface
{
    public function getCopy() :PrototypeInterface;
}