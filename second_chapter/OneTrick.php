<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/15 0015
 * Time: 11:31
 * description:一个简单的类其中包含一个简单的方法
 */
class OneTrick{

    private $storeHere;

    public function trick($whatever){
        $this->storeHere = $whatever;
        return $this->storeHere;
    }
}

$doIt = new OneTrick();
$dataNow = $doIt->trick("this is perfect.");
echo $dataNow;