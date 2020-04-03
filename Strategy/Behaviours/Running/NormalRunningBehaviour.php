<?php


namespace Strategies;

class NormalRunningBehaviour implements RunningBehaviourInterface
{

    public function run() :void
    {
        echo 'I\'m running';
    }
}