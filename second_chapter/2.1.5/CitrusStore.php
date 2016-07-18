<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/18 0018
 * Time: 14:42
 * description:2.1.5类型提示
 */
class CitrusStore implements IProduct{

    public function apples(){
        return "CitrusStore sez--We do not sell apples. <br/>";
    }

    public function oranges(){
        return "CitrusStore sez--We have citrus fruit. <br/>";
    }
}