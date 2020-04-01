<?php


namespace Decorators;

class Mozzarella extends Decorator
{

    public function getDescription() : string
    {
        return $this->pizza->getDescription().'+ Mozzarella';
    }

    public function getCost()
    {
        return $this->pizza->getCost() + 0.5;
    }
}