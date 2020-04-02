<?php


namespace Observables;


use Observers\ObserversInterface;

interface ObservableInterface
{
    public function add(ObserversInterface $observer) :void;

    public function remove(ObserversInterface $observer) :void;

    public function notify() :void;
}