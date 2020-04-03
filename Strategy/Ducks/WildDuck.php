<?php


namespace Actors;


use Strategies\FlyingBehaviourInterface;
use Strategies\QuackingBehaviourInterface;
use Strategies\RunningBehaviourInterface;

class WildDuck implements DuckInterface
{

    public function quack(QuackingBehaviourInterface $quack)
    {
        echo ' : Wild Duck Wild Duck '.$quack->quack().' <br>';
    }

    public function run(RunningBehaviourInterface $run)
    {
        echo ' : Wild Duck Says '.$run->run().' <br>';
    }

    public function fly(FlyingBehaviourInterface $fly)
    {
        echo ' : Wild Duck Says '.$fly->fly().' <br>';
    }
}