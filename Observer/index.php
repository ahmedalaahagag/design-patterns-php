<?php

use Observables\WeatherStation;
use Observers\Phone;
use Observers\WallDisplay;

require __DIR__.'/vendor/autoload.php';

$weatherStation = new WeatherStation();
$phone = new Phone('phone', $weatherStation);
$wallDisplay = new WallDisplay('wall', $weatherStation);

$weatherStation->add($phone);
$weatherStation->add($wallDisplay);
$weatherStation->setData(['degrees'=>'20', 'humidity'=>'3']);
$weatherStation->notify();

$phone->display();
$wallDisplay->display();

$weatherStation->remove($phone);

$weatherStation->setData(['degrees'=>'10', 'humidity'=>'0']);
$weatherStation->notify();
$phone->display();
$wallDisplay->display();