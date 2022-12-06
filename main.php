<?php
require_once 'Farm.php';
require_once 'Cow.php';
require_once 'Chicken.php';

$farm = new Farm();
addCowsAndChickens($farm, 10, 20);

//создали ферму

workingWeek($farm);
addCowsAndChickens($farm, 1, 5);

//продали на рынке продукцию и купили животных

workingWeek($farm);

function addCowsAndChickens($farm, $cows, $chickens){
    for ($i = 0; $i < $cows; $i++){
        $farm->addAnimal(new Cow());
    }
    for ($i = 0; $i < $chickens; $i++){
        $farm->addAnimal(new Chicken());
    }
    echo '<p>Количество животных: </p>';
    $farm->getAnimals();
}
function workingWeek($farm){
    for ($i = 0; $i < 7; $i++){
        $farm->collectProducts();
    }
    echo '<p>За неделю было собрано: </p>';
    $farm->getProducts();
    $farm->sellProducts();
}
