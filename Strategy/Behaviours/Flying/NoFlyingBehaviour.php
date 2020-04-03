<?php


namespace Strategies;

class NoFlyingBehaviour implements FlyingBehaviourInterface
{

    public function fly() :void
    {
        echo 'I\'m a bird but can\'t fly';
    }
}