<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/15 0015
 * Time: 10:18
 * description:设计模式的单一职责原则，通过对类限制单一职责，不仅能提醒自己为什么要对问题
 * 模块化，还能更容易地组织模块。这个类表示一个更复杂操作中的一个模块，职责为查找用户代理信息。
 */
class TellAll{

    private $userAgent;

    public function __construct(){
        $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
        echo $this->userAgent;
    }
}

$tellAll = new TellAll();