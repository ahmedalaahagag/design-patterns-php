<?php

use Actors\{
    MountainDuck,
    WildDuck,
    RubberDuck
};
use Strategies\{NoFlyingBehaviour,
    NormalQuackingBehaviour,
    NormalRunningBehaviour,
    NormalFlyingBehaviour,
    NoRunningBehaviour,
    SlowRunningBehaviour};

require __DIR__.'/vendor/autoload.php';

$wildDuck = new WildDuck();
$wildDuck->quack(new NormalQuackingBehaviour());
$wildDuck->run(new NormalRunningBehaviour());
$wildDuck->fly(new NormalFlyingBehaviour());

$mountainDuck = new MountainDuck();
$mountainDuck->quack(new NormalQuackingBehaviour());
$mountainDuck->run(new SlowRunningBehaviour());
$mountainDuck->fly(new NormalFlyingBehaviour());

$rubberDuck = new RubberDuck();
$rubberDuck->quack(new NormalQuackingBehaviour());
$rubberDuck->run(new NoRunningBehaviour());
$rubberDuck->fly(new NoFlyingBehaviour());

