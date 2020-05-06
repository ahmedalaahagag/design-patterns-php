<?php


namespace Animals;


class Duck implements AnimalInterface
{
    public function speak():void
    {
        echo "I'm a duck <br>";
    }
}