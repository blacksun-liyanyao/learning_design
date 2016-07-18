<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/18 0018
 * Time: 14:42
 * description:2.1.4接口和常量
 */
interface IConnectInfo{
    const HOST = 'phpmyadmin.com';
    const UNAME = 'root';
    const DBNAME = 'test';
    const PWD = 'root';
    public function testConnection();
}