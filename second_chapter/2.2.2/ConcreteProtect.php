<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/18 0018
 * Time: 14:42
 * description:2.2.2通过可见性保护封装 protected抽象类实现
 */
require "ProtectVis.php";

class ConcreteProtect extends ProtectVis{
    public function __construct(){
        $this->countMoney();
    }

    protected function countMoney(){
        $this->wage = "your hourly wage is $";
        echo $this->wage . $this->setHourly(36);
    }
}

$worker = new ConcreteProtect();