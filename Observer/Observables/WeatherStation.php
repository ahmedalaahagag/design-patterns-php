<?php


namespace Observables;


use Observers\ObserversInterface;

class WeatherStation implements FlyInterface
{
    private array $devicesList;
    public string $weatherData;

    public function add(ObserversInterface $device) :void
    {
        echo $device->getId().' Subscribed to weather station updates <br>';
        $this->devicesList[$device->getId()] = $device;
    }

    public function remove(ObserversInterface $device) :void
    {
        echo $device->getId().' Unsubscribed from weather station updates <br>';
        unset($this->devicesList[$device->getId()]);
    }

    public function notify() :void
    {
        foreach ($this->devicesList as $device) {
            echo 'Pushing new data to : '.$device->getId().'<br>';
            $device->update();
        }
    }

    public function setData(array $data) :void
    {
        $this->weatherData = json_encode($data, JSON_THROW_ON_ERROR);
    }
}