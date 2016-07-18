<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/18 0018
 * Time: 14:42
 * description:2.1.5类型提示
 */
require "IProduct.php";

class FruitStore implements IProduct{
    public function apples(){
        return "FruitStore sez--We have apples. <br/>";
    }

    public function oranges(){
        return "FruitStore sez--We have no citrus fruit. <br/>";
    }
}