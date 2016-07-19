<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/19 0019
 * Time: 11:02
 * description:2.3继承
 */

require_once "FurryPets.php";

class Cats extends FurryPets{

    function __construct(){
        echo "Cats ". $this->fourlegs() . "<br/>";
        echo $this->makeSound("Meow, purrr") . "<br/>";
        echo $this->ownHouse() . "<br/>";
    }

    private function ownHouse(){
        return "I'll just walk on this keyboard." . "<br/>";
    }
}