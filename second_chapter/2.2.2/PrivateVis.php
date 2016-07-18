<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/18 0018
 * Time: 14:42
 * description:2.2.2通过可见性保护封装 private
 */
class PrivateVis{

    private $money;

    public function __construct(){
        $this->money = 200;
        $this->secret();
    }

    private function secret(){
        echo $this->money;
    }
}

$worker = new PrivateVis();