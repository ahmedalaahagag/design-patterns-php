<?php


namespace Strategies;

class SlowRunningBehaviour implements RunningBehaviourInterface
{

    public function run() :void
    {
        echo 'I\'m running Slowly';
    }
}