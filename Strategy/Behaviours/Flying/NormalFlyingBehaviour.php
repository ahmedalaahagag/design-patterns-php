<?php


namespace Strategies;

class NormalFlyingBehaviour implements FlyingBehaviourInterface
{

    public function fly() :void
    {
        echo 'I\'m Flying as normal Bird';
    }
}