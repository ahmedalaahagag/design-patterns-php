<?php

use Clients\CalculatorClient;
use Invoker\Invoker;


require __DIR__.'/vendor/autoload.php';

$invoker = new Invoker();
$calculator = new CalculatorClient($invoker);
$x = 1;

echo 'X = '.$x.'<br>';
echo 'Adding 2 <br>';
echo 'X = '.$x = $calculator->add($x, 2).'<br>';

echo 'Undo Adding <br> X = ';
echo $x = $calculator->undo().'<br>';

echo 'Subtracting 1 <br>';
echo 'X = '.$x = $calculator->subtract($x, 1).'<br>';

echo 'Undo Subtracting <br> X =';
echo $x = $calculator->undo();

