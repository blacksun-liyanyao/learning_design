<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/18 0018
 * Time: 14:42
 * description:2.1.5类型提示
 */
require "FruitStore.php";
require "CitrusStore.php";

class UseProducts{
    public function __construct(){
        $appleSauce = new FruitStore();
        $orangeJuice = new CitrusStore();
        $this->doInterface($appleSauce);
        $this->doInterface($orangeJuice);
    }

    public function doInterface(IProduct  $product){
        echo $product->apples();
        echo $product->oranges();
    }
}

$worker = new UseProducts();