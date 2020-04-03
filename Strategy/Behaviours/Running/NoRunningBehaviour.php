<?php


namespace Strategies;

class NoRunningBehaviour implements RunningBehaviourInterface
{

    public function run() :void
    {
        echo 'I can\'t run';
    }
}