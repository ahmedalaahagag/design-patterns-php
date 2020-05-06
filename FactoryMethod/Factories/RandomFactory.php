<?php


namespace Factories;


use Animals\AnimalInterface;
use Animals\Cat;
use Animals\Dog;
use Animals\Duck;

class RandomFactory implements FactoryInterface
{
    public function createAnimal(): AnimalInterface
    {
        $random = random_int(0,2);
        $animalObject = null;
        switch ($random){
            case 0:
                $animalObject = new Dog();
                break;
            case 1:
                $animalObject = new Cat();
                break;
            case 2:
                $animalObject = new Duck();
                break;
        }
        return  $animalObject;
    }
}