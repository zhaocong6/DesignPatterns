<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-11
 * Time: 下午3:21
 */

class BmwCar implements CarInterface
{
    /**
     * @return string
     */
    public function autoAc() :string
    {
        return '宝马, 自动空调';
    }

    /**
     * @return string
     */
    public function mp3() :string
    {
        return '宝马, 播放音乐';
    }

    /**
     * @return string
     */
    public function video() :string
    {
        return '宝马, 播放视频';
    }
}