<?php

namespace Clients;

use Commands\AddCommand;
use Commands\SubtractCommand;
use Invoker\InvokerInterface;

class CalculatorClient
{
    private InvokerInterface $invoker;
    public function __construct(InvokerInterface $invoker)
    {
        $this->invoker = $invoker;
    }

    public function add(int $x,int $y)
    {
        $this->invoker->setCommand(new AddCommand($x,$y));
        return $this->invoker->doCommand();
    }

    public function subtract(int $x,int $y)
    {
        $this->invoker->setCommand(new SubtractCommand($x,$y));
        return $this->invoker->doCommand();
    }

    public function undo()
    {
        return $this->invoker->undoCommand();
    }
}