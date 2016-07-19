<?php
/**
 * Created by PhpStorm.
 * User: blacksun-liyanyao
 * Date: 2016/7/19 0019
 * Time: 10:57
 * description:2.3继承
 */
class FurryPets{

    protected $sound;

    protected function fourlegs(){
        return "walk on all fours";
    }

    protected function makeSound($petNoise){
        $this->sound = $petNoise;
        return $this->sound;
    }
}