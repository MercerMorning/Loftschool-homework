<?php
trait NewDriver
{
    public $sum;
    public function __construct()
    {
        $this->sum = 100;
    }
}
trait Gps
{

}
interface RateInt //описание метода подсчета цены, метода добавления услуги
{
    public function countPrice();
    public function addService($service); //передаем сюда объект доп услуги
}
interface additionalService //интерфейс доп. услуги
{
    public function __construct();
}
abstract class Rate implements RateInt
{
    protected $distancePrice;
    protected $timePrice;
    protected $distance;
    static $time;
    public $sum;
    public function __construct($transmittedDistance, $transmittedTime)
    {
        $this->distance = $transmittedDistance;
        $this->time = $transmittedTime;
    }
    public function countPrice()
    {
        $this->sum += $this->distance * $this->distancePrice + $this->time * $this->timePrice;
    }
    public function addService($service)
    {
        $this->sum += $service->sum;
    }
}
class BasicRate extends Rate {
    public $distancePrice = 10;
    public $timePrice = 3;
}
class Gps implements additionalService
{
    public $sum;

    public function __construct()
    {
        $this->sum = 15;
    }
}
class AdditionalDriver implements additionalService
{
    use NewDriver;
}
$basic = new BasicRate(10, 5);
$gps = new Gps();
$additionalDriver = new AdditionalDriver();
$basic->addService($additionalDriver);
$basic->countPrice();
echo $basic->sum;


