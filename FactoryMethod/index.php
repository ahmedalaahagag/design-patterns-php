<?php

use Factories\RandomFactory;

require __DIR__.'/vendor/autoload.php';

$world = [];
$randomFactory = new RandomFactory();
$randomAnimal = $randomFactory->createAnimal();
$randomAnimal->speak();

$randomAnimal = $randomFactory->createAnimal();
$randomAnimal->speak();

$randomAnimal = $randomFactory->createAnimal();
$randomAnimal->speak();

$randomAnimal = $randomFactory->createAnimal();
$randomAnimal->speak();
