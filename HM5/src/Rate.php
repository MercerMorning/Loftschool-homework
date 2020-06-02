<?php
abstract class Rate implements RateInt
{
    protected $countDistance;
    protected $countMinutes;
    protected $distance;
    protected $time;
    protected $gpsService;
    public $sum;
    public function __construct($transmittedDistance, $transmittedTime)
    {
        $this->distance = $transmittedDistance;
        $this->time = $transmittedTime;
    }
    public function getPrice()
    {
        $this->sum += $this->distance * $this->countDistance + $this->time * $this->countMinutes;
    }
    public function addService($service)
    {
        $this->$service = true;
    }
}
