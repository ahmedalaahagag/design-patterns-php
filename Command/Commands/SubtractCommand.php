<?php


namespace Commands;


class SubtractCommand implements CommandInterface
{
    private $x;
    private $y;
    private $sum;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function do()
    {
        return $this->sum = $this->x - $this->y;
    }

    public function undo()
    {
        return $this->sum + $this->y;
    }
}