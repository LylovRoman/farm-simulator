<?php
require_once 'Animal.php';

class Cow extends Animal
{
    public $name = 'корова';
    public function getProduct()
    {
        return ['литры молока' => rand(8, 12)];
    }
}
