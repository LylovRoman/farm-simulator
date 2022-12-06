<?php
require_once 'Animal.php';

class Chicken extends Animal
{
    public $name = 'курица';
    public function getProduct()
    {
        return ['яйца' =>  rand(0, 1)];
    }
}
