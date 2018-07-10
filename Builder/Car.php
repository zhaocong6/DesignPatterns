<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-10
 * Time: 上午11:09
 */

class Car
{
    private $car;

    /**
     * Car constructor.
     * @param CarInterface $car
     */
    public function __construct(CarInterface $car)
    {
        $this->car = $car;
    }

    public function getCarInfo()
    {
        echo '颜色:'.$this->car->color()."\n".'品牌:'.$this->car->brand();
    }
}
