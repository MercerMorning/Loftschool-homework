<?php
class HourRate extends Rate
{
    use AddGps;
    use AddDriver;
    const GPS_PRICE_FOR_HOUR = 15;
    public $countHours = 200;
    public function __construct($transmittedTime)
    {
        $this->time = $transmittedTime;
    }
    public function getPrice()
    {
        parent::getPrice();
        if ($this->onDriver) {
            $this->sum += 100;
        }
        if ($this->time >= 60) {
            if ($this->onGps) {
                $this->sum += self::GPS_PRICE_FOR_HOUR * roundPrice($this->time);
            }
        }
        $this->sum += roundPrice($this->time) * $this->countHours;
    }
}