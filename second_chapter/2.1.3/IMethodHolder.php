<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/18 0018
 * Time: 14:31
 * description:2.1.3接口
 */
interface IMethodHolder{
    public function getInfo($info);
    public function sendInfo($info);
    public function calculate($first,$second);
}