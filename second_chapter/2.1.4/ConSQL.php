<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/18 0018
 * Time: 14:42
 * description:2.1.4接口和常量
 */
require "IConnectInfo.php";

class ConSQL implements IConnectInfo{
    private $server = IConnectInfo::HOST;
    private $currentDB = IConnectInfo::DBNAME;
    private $user = IConnectInfo::UNAME;
    private $pass = IConnectInfo::PWD;

    public function testConnection(){
        $hookup = new mysqli($this->server,$this->user,$this->pass,$this->currentDB);
        if(mysqli_connect_error()){
            die('bad mojo');
        }
        print "You're hooked up Ace!<br/>" . $hookup->host_info;

        $hookup->close();
    }
}

$useConstant = new ConSQL();
$useConstant->testConnection();