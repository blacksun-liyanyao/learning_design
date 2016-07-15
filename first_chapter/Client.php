<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/15 0015
 * Time: 10:40
 * description:通过使用Client类，提供了一种方法从而可以更有效的使用MobileSniffer类。
 */
ini_set("display_errors","1");
error_reporting(E_ALL);
require "MobileSniffer.php";
class Client{

    private $mobSniff;
    public function __construct(){
        $this->mobSniff = new MobileSniffer();
        echo "Device =" . $this->mobSniff->findDevice() . "<br/>";
        echo "Browser =" . $this->mobSniff->findBrowser() . "<br/>";
    }
}
$trigger = new Client();