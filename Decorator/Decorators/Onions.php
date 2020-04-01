<?php


namespace Decorators;

class Onions extends Decorator
{

    public function getDescription(): string
    {
        return $this->pizza->getDescription().'+ Onions';
    }

    public function getCost(): int
    {
        return $this->pizza->getCost() + 0.5;
    }
}