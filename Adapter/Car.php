<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-11
 * Time: 下午3:24
 */

class Car
{
    private $car;

    public function __construct(CarInterface $car)
    {
        $this->car = $car;
    }

    public function playMp3()
    {
        echo $this->car->mp3();
    }

    public function playVideo()
    {
        echo $this->car->video();
    }
}