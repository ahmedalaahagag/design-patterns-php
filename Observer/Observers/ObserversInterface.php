<?php


namespace Observers;


use Observables\ObservableInterface;

interface ObserversInterface
{
    public function __construct(string $deviceId, ObservableInterface $observable);

    public function update() :void;
}