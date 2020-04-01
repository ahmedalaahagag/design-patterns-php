<?php
require __DIR__.'/vendor/autoload.php';
use Base\PlainPizza;
use Decorators\Mozzarella;
use Decorators\Onions;

$pizza = new PlainPizza();
$pizza = new Onions(new Mozzarella($pizza));
echo $pizza->getDescription();
