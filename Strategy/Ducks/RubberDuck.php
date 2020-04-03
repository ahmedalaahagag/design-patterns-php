<?php


namespace Actors;


use Strategies\FlyingBehaviourInterface;
use Strategies\QuackingBehaviourInterface;
use Strategies\RunningBehaviourInterface;

class RubberDuck implements DuckInterface
{

    public function quack(QuackingBehaviourInterface $quack)
    {
        echo ' : Rubber Duck Says'.$quack->quack().' <br>';
    }

    public function run(RunningBehaviourInterface $run)
    {
        echo ' : Rubber Duck Says'.$run->run().' <br>';
    }

    public function fly(FlyingBehaviourInterface $fly)
    {
        echo ' : Rubber Duck Says'.$fly->fly().' <br>';
    }
}