<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/18 0018
 * Time: 14:42
 * description:2.2.2通过可见性保护封装 protected抽象类
 */
abstract class ProtectVis{
    abstract protected function countMoney();
    protected $wage;

    protected function setHourly($hourly){
        $money = $hourly;
        return $money;
    }
}