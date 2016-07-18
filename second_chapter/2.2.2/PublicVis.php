<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/18 0018
 * Time: 14:42
 * description:2.2.2通过可见性保护封装 Public
 */

class PublicVis{
    private $password;

    private function openSesame($someData){
        $this->password = $someData;
        if($this->password=="secret"){
            echo "you're in!<br/>";
        }
        else{
            echo "Release the hounds!<br/>";
        }
    }

    public function unlock($safe){
        $this->openSesame($safe);
    }
}

$worker = new PublicVis();
$worker->unlock("secret");
$worker->unlock("duh");