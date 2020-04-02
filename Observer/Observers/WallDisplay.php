<?php


namespace Observers;


use Observables\ObservableInterface;

class WallDisplay implements ObserversInterface
{
    private ObservableInterface $weatherStation;
    private string $weatherData;
    private string $deviceId;

    public function __construct(string $deviceId, ObservableInterface $weatherStation)
    {
        $this->deviceId = $deviceId;
        $this->weatherStation = $weatherStation;
    }

    public function update() :void
    {
        $this->weatherData = $this->weatherStation->weatherData;
    }

    public function display() :void
    {
        $data = json_decode($this->weatherData, true);
        echo $this->getId().' data : <br> Degrees :'.$data['degrees'].' Humidity :'.$data['humidity'].'<br> ';
    }

    public function getId() :string
    {
        return $this->deviceId;
    }
}