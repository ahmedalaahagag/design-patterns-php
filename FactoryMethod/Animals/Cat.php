<?php


namespace Animals;


class Cat implements AnimalInterface
{

    public function speak():void
    {
        echo "I'm a cat <br>";
    }
}