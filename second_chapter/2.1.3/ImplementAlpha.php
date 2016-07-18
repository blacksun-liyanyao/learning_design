<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/18 0018
 * Time: 14:33
 * description:2.1.3接口
 */
require "IMethodHolder.php";

class ImplementAlpha implements IMethodHolder{

    public function getInfo($info){
        echo "this is NEWS! ".$info."<br/>";
    }

    public function sendInfo($info){
        return $info;
    }

    public function calculate($first,$second){
        $calulated = $first * $second;
        return $calulated;
    }

    public function useMethods(){
        $this->getInfo("The sky is falling...");
        echo $this->sendInfo("Vote for Senator Snort!") . "<br/>";
        echo "You make $". $this->calculate(20,15) . " in your part-time job<br/>";
    }
}

$worker = new ImplementAlpha();
$worker->useMethods();