<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/15 0015
 * Time: 15:52
 * description:实现抽象类，并且继承。
 */
require "OneTrickAbstract.php";

class OneTrickConcrete extends OneTrickAbstract{
    public function trick($whatever){
        $this->storeHere = "An anstract property";
        return $whatever.$this->storeHere;
    }
}
$worler = new OneTrickConcrete();
echo $worler->trick("From an abstract origin...");