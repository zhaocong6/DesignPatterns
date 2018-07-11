<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 18-7-11
 * Time: 下午3:21
 */

class FordCar implements CarInterface
{
    /**
     * @return string
     */
    public function ac() :string
    {
        return '福特, 普通空调';
    }

    /**
     * @return string
     */
    public function mp3() :string
    {
        return '福特, 播放音乐';
    }

    /**
     * @return string
     */
    public function video() :string
    {
        return '福特, 播放视频';
    }
}