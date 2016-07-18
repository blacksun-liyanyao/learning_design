<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/18 0018
 * Time: 14:42
 * description:2.2.3获取方法和设置方法
 */
class GetSet{

    private $dataWarehouse;

    public function __construct(){
        $this->setter(200);
        $got = $this->getter();
        echo $got;
    }

    private function getter(){
        return $this->dataWarehouse;
    }

    private function setter($setValue){
        $this->dataWarehouse = $setValue;
    }

}
$worker = new GetSet();