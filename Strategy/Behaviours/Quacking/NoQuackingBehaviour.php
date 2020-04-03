<?php


namespace Strategies;


class NoQuackingBehaviour implements QuackingBehaviourInterface
{

    public function quack() :void
    {
        echo 'I can\'t quack';
    }
}