<?php

namespace Actors;

use Strategies\FlyingBehaviourInterface;
use Strategies\QuackingBehaviourInterface;
use Strategies\RunningBehaviourInterface;

interface DuckInterface
{
    public function quack(QuackingBehaviourInterface $quack);
    public function run(RunningBehaviourInterface $run);
    public function fly(FlyingBehaviourInterface $fly);
}