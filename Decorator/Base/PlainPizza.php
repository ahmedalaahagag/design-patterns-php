<?php

namespace Base;

class PlainPizza implements PizzaInterface
{
    public function getDescription() :string
    {
        return 'Pizza Base';
    }

    public function getCost() : int
    {
        return 10;
    }
}