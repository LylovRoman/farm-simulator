<?php

class Farm
{
    private $animals;
    private $products;

    public function __construct(){
        $this->animals = [];
        $this->products = [];
    }
    public function addAnimal(Animal $animal){
        array_push($this->animals, $animal);
    }
    public function collectProducts(){
        $products = [];
        foreach ($this->animals as $animal){
            array_push($products, $animal->getProduct());
        }
        foreach ($products as $product){
            foreach ($product as $name => $amount){
                if (isset($this->products[$name])){
                    $this->products[$name] += $amount;
                } else {
                    $this->products[$name] = $amount;
                }
            }
        }
    }
    public function getProducts(){
        foreach ($this->products as $product => $amount){
            echo $product . ': ' . $amount . '<br>';
        }
    }
    public function getAnimals(){
        $animals = [];
        foreach ($this->animals as $animal){
            if (isset($animals[$animal->name])){
                $animals[$animal->name]++;
            } else {
                $animals[$animal->name] = 1;
            }
        }
        foreach ($animals as $animal => $amount){
            echo $animal . ': ' . $amount . '<br>';
        }
    }
    public function sellProducts(){
        $this->products = [];
    }
}
