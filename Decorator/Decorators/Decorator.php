<?php

namespace Decorators;

use Base\PizzaInterface;
use Base\PlainPizza;

abstract class Decorator implements PizzaInterface
{
    protected PizzaInterface $pizza;

    public function __construct(PizzaInterface $pizza)
    {
        $this->pizza = $pizza;
    }

    public function getDescription()
    {
        return $this->pizza->getDescription();
    }

    public function getCost()
    {
        return $this->pizza->getCost();
    }

}