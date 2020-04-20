<?php
namespace Commands;

interface CommandInterface
{
    public function do();
    public function undo();
}