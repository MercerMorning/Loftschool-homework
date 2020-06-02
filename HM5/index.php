<?php
function round_price($price){
    if (is_double($price / 60)){
        return ceil($price / 60);
    }
}
trait AddDriver
{
    public $sum;
    public function __construct()
    {
        $this->sum = 100;
    }
}
trait AddGps
{
    public $sum;
    public function __construct()
    {
        $this->sum = 100;
    }
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
class HourRate extends Rate {
    public $timePrice = 200;
    public function __construct($transmittedTime)
    {
        $this->time = $transmittedTime;
    }
    public function countPrice()
    {
        $this->sum += round_price($this->time) * $this->timePrice;
    }
}
class StudentRate extends Rate {
    public $distancePrice = 4;
    public $timePrice = 1;
}
class Gps implements additionalService
{
    use AddGps;
}
class AdditionalDriver implements additionalService
{
    use AddDriver;
}
$basic = new HourRate(230);
$gps = new Gps();
$additionalDriver = new AdditionalDriver();
$basic->addService($gps);
$basic->countPrice();
echo $basic->sum;


