<?php


namespace Actors;


use Strategies\FlyingBehaviourInterface;
use Strategies\QuackingBehaviourInterface;
use Strategies\RunningBehaviourInterface;

class MountainDuck implements DuckInterface
{

    public function quack(QuackingBehaviourInterface $quack)
    {
        echo ' : Mountain Duck Says'.$quack->quack().' <br>';
    }

    public function run(RunningBehaviourInterface $run)
    {
        echo ' : Mountain Duck Says'.$run->run().' <br>';
    }

    public function fly(FlyingBehaviourInterface $fly)
    {
        echo ' : Mountain Duck Says'.$fly->fly().' <br>';
    }
}