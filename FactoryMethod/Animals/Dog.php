<?php


namespace Animals;


class Dog implements AnimalInterface
{
    public function speak():void
    {
        echo "I'm a dog <br>";
    }
}