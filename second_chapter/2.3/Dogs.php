<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/19 0019
 * Time: 10:59
 * description:2.3继承
 */
require_once "FurryPets.php";

class Dogs extends FurryPets{

    function __construct(){
        echo "Dogs ". $this->fourlegs() . "<br/>";
        echo $this->makeSound("Woof, woof") . "<br/>";
        echo $this->guardsHouse() . "<br/>";
    }

    private function guardsHouse(){
        return "Grrrrr" . "<br/>";
    }
}