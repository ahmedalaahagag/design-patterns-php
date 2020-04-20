<?php

namespace Invoker;

use Commands\CommandInterface;

interface InvokerInterface
{
    public function doCommand();
    public function undoCommand();
    public function setCommand(CommandInterface $command);
}