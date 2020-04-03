<?php


namespace Strategies;


class NormalQuackingBehaviour implements QuackingBehaviourInterface
{

    public function quack() :void
    {
        echo 'I\'m quacking';
    }
}