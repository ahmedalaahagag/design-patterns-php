<?php


namespace Observers;


use Observables\FlyInterface;

interface ObserversInterface
{
    public function __construct(string $deviceId, FlyInterface $observable);

    public function update() :void;
}