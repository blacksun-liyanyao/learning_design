<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/19 0019
 * Time: 11:04
 * description:2.3继承
 */

require "Dogs.php";
require "Cats.php";

class Client{

    public function __construct(){
        $dogs = new Dogs();
        $cats = new Cats();
    }
}

$worker = new Client();