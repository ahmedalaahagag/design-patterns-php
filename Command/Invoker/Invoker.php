<?php


namespace Invoker;

use Commands\CommandInterface;

class Invoker implements InvokerInterface
{
    private array $commandsStack;
    private CommandInterface $currentCommand;

    public function doCommand()
    {
        $this->commandsStack[] = $this->currentCommand;
        return $this->currentCommand->do();
    }

    public function undoCommand()
    {
        return array_pop($this->commandsStack)->undo();
    }


    public function setCommand(CommandInterface $command)
    {
        $this->currentCommand = $command;
    }
}